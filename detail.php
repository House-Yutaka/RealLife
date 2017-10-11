<?php
$eTabName = 'detail';

if(!isset($_GET['id'])){
  header('Location: index.php');
  exit();
}

session_start();
require('parts/db_connect.php');

$sql ='SELECT `id`,`user_id`,`text`,`address`,`picture_path` FROM `seego_pictures` WHERE `id`=?';
$data = array($_GET['id']);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

  $contribution = $stmt->fetch(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($contribution);
// echo '</pre>';

$sql ="SELECT `seego_pictures`.`id`,`user_id`,`username` 
  	   FROM `seego_pictures`,`seego_users` 
  	   WHERE `seego_pictures`.`user_id` = `seego_users`.`id`";
$stmt = $dbh->prepare($sql);
$stmt->execute($data);	

$userdatas=array();
while (1) {
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($rec == false) {
		break;
	}

	$userdatas[] = $rec;
}


if (!empty($_POST)) {
	if(!isset($_SESSION['login_user']['id'])){
    header('Location: login.php');
    exit();
	}

	if(isset($_POST['likes']) && $_POST['likes'] == 'like'){
        
        $sql = 'INSERT INTO `seego_likes` SET `seego_pictures_id`=? ,
                                        	  `user_id`=?
        ';
        $data = array($_POST['seego_pictures_id'],$_SESSION['login_user']['id']);
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);

    }elseif(isset($_POST['likes']) && $_POST['likes'] == 'unlike'){
        //いいね取り消しを押した場合、ここの処理が走る
        $sql = 'DELETE FROM `seego_likes` WHERE `seego_pictures_id`=?
                                    		AND `user_id`=?
        ';
        $data = array($_POST['seego_pictures_id'],$_SESSION['login_user']['id']);
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);

    }
    
    if (isset($_POST['likes'])) {

      header('Location: detail.php?id='.$_POST['seego_pictures_id']);
      exit();
    }

}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>detsil</title>
	<link rel="stylesheet" type="text/css" href="styles/style_detail.css">
	<link rel="stylesheet" type="text/css" href="lib/boostrap/css/bootstrap.css">
</head>
<body>
<?php
  include('parts/header.php');
?>

<div class="container">
	<div class="row">
		<!-- <div class="col-xs-offset-2"></div> -->
		<div class="col-lg-offset-3 col-lg-6">
			<div class="row">
				<div class="col-lg-12">
					<div class="back-style">
						<div class="image">
				    		<img src="images/ex_view_images/<?php echo $contribution['picture_path'];?>" width="100%">
				    	</div>
				   		<div class="back-color">
				   			<div class="row">
				   				<div class="col-lg-3"></div>
				   				<div class="col-lg-9">
						   			<div class="deyail">
						   				<li style="margin-bottom: 8px;"><?php echo $contribution['address']; ?></li>
						   				<li style="margin-bottom: 10px;"><?php echo $contribution['text']; ?></li>
								   	</div>
									<?php foreach ($userdatas as $userdata) {  ?>
										<?php if($userdata['id'] == $_GET['id']){  ?>
											<div class="detail_name"><span style="color: orange;">@</span><?php echo $userdata['username']; ?></div>
										<?php } ?>
									<?php } ?>	
									<?php 
										  if($contribution != false) {
						                  // いいねのカウントを表示
						                  $sql = 'SELECT COUNT(*) AS `count` FROM `seego_likes` WHERE `seego_pictures_id` = ?';
						                  $data = array($contribution['id']);
						                  $stmt = $dbh->prepare($sql);
						                  $stmt->execute($data);
						                  // 1件文のデータを取得
						                  $likes = $stmt->fetch(PDO::FETCH_ASSOC);

						                  // 自分がいいね！を一回以上しているかどうかをチェック
						                  $sql = 'SELECT COUNT(*) AS `count` FROM `seego_likes` WHERE `seego_pictures_id` = ? AND `user_id` = ?';
						                  $data = array($contribution['id'],$_SESSION['login_user']['id']);
						                  $stmt = $dbh->prepare($sql);
						                  $stmt->execute($data);
						                  // 1件文のデータを取得
						                  $likes_chk = $stmt->fetch(PDO::FETCH_ASSOC);

						                  // var_dump($likes_chk['count']);
						              	?>
						              	<!-- いいね！ボタン設置 -->
						              	<form method="POST" action="">
						                	いいね！数:<?php echo $likes['count'];?>
						                	<input type="hidden" name="seego_pictures_id" value="<?php echo $contribution['id']; ?>">
						                	<?php if($likes_chk['count'] < 1){ ?>
						                    <input type="hidden" name="likes" value="like">
						                    <input type="submit" value="いいね！" class="btn btn-primary btn-xs">
						                	<?php }else{ ?>
						                    <input type="hidden" name="likes" value="unlike">
						                    <input type="submit" value="いいね！取り消し" class="btn btn-danger btn-xs">
						                <?php } ?>
						              </form>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-offset-3"></div>
	</div>
</div>


<?php
  include('parts/footer.php');
?>

</body>
</html>