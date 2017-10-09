<?php
	$eTabName = 'Mypage';
?>



<?php
	session_start();
	require('parts/db_connect.php');

	// 投稿一覧を表示する
	$sql = "SELECT `p`.* 
	        FROM `seego_pictures` AS `p` 
	        LEFT JOIN `seego_users` AS `u`
	        ON `p`.`user_id`=`u`.`id` 
	        WHERE 1 ORDER BY `p`.`id` DESC";
	$data = array(); // ?が無い場合は空のままでOK
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data); // object思考でexecuteを実行している

	// 表示用の配列を用意
	$contributions = array();
	while(true){
		$record = $stmt->fetch(PDO::FETCH_ASSOC);
		// $recordはデータベースのカラム値をkeyとする。
		// 連想配列で構成されます。（データベースから１件取ってきます。）
		if(!$record){
			break;
		}
		$contributions[]=$record;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
	<link rel="stylesheet" type="text/css" href="styles/style_mypage.css">
</head>
<body>
	<?php
		include('parts/header.php');
	?>
	<div class="wrapper">
		<form method="POST" action="" enctype="multipart/form-data">

			<!-- このdivたぐの中に書く -->
		<div class="container">
			<div class="row">					
				<div class="col-xs-3">
		  			<div class="prof-img">	  
						<!-- アイコン写真が飛んでくる -->
						<?php if($_SESSION['login_user']['user_icon']==null){ ?>
							<img src="images/images.png">
						<?php }else{ ?>
							<img src="<?php echo 'images/'.$image['user_icon'];?>">
						<?php } ?>
	  					 <div>
	  					 	<!-- usernameが飛んでくる -->
	     					<h2><?php echo $_SESSION['login_user']['username']; ?></h2>
	  					 </div>
						 <div>
	 					  <a href="edit.php" type="button"><i class="fa fa-edit"></i>Edit</a><br>
	 					  <a href="signup.php" type="button"><i class="fa fa-sign-out" aria-hidden="true"></i>LogOut</a>
						 </div>
					</div>
				</div>
					
				<div class="col-xs-9">
						 <!-- 縦に記述 -->
						<h3>投稿一覧</h3><br>
						<!-- 投稿した写真＆コメントが表示される -->
							<?php foreach($contributions as $contribution){ ?>
								<div style="margin-bottom: 15px;">
									<img src="images/<?php echo $contribution['picture_path'];?>" width="180px" height="180px">
									<span style="font-size: 17px;"><?php echo $contribution['text']; ?></span><br>
									<span><?php echo $contribution['address']; ?></span><br>			<?php echo "投稿日時:" . $contribution['created']; ?><br>
						    <?php } ?>
						    </div>
						
						<h3>お気に入り一覧</h3><br>
						<!-- いいね！押した記事が表示される -->
							<?php foreach($contributions as $contribution){ ?>
								<div style="margin-bottom: 15px;">
									<img src="images/<?php echo $contribution['picture_path'];?>" width="180px" height="180px">
									<span style="font-size: 17px;"><?php echo $contribution['text']; ?></span><br>
									<span><?php echo $contribution['address']; ?></span><br>			<?php echo "投稿日時:" . $contribution['created']; ?><br>
						    <?php } ?>
						    </div>


						
				</div>		
			</div>									
		</div>



	</form>
		<div class="push"></div>
	</div>

	<?php
		include('parts/footer.php');
	?>
</body>
</html>
