<?php
	$eTabName = 'Mypage';
?>

<?php
	session_start();
	require('parts/db_connect.php');

	// iconの表示
	$sql='SELECT `id`,`user_icon` FROM `seego_users`';
	$data=array();
	$stmt=$dbh->prepare($sql);
	$stmt->execute($data);

	$icons = array();
	while(true){
		$record = $stmt->fetch(PDO::FETCH_ASSOC);
		// $recordはデータベースのカラム値をkeyとする。
		// 連想配列で構成されます。（データベースから１件取ってきます。）
		if(!$record){
			break;
		}
		$icons[]=$record;
	}

	if (!empty($_GET)) {

	// 投稿
	$sql='SELECT `id`,`picture_path`,`address`,`text`,`created` FROM `seego_pictures` WHERE `user_id`=?';
	$data=array($_GET['id']);
	$stmt=$dbh->prepare($sql);
	$stmt->execute($data);

	// $record = $stmt->fetch(PDO::FETCH_ASSOC);

	// var_dump($record);


 	// 投稿一覧を表示する
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

	// var_dump($contributions);

	// お気に入り
	$sql="SELECT `seego_pictures`. * ,`seego_user_id`
	FROM `seego_pictures`,`seego_favos` 
	WHERE `seego_pictures`.`id`=`seego_favos`.`seego_pictures_id`";
	$data = array(); 
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);


	// お気に入り一覧を表示する
	// 表示用の配列を用意
	$favos = array();
	while(true){
		$record = $stmt->fetch(PDO::FETCH_ASSOC);
		// $recordはデータベースのカラム値をkeyとする。
		// 連想配列で構成されます。（データベースから１件取ってきます。）
		if(!$record){
			break;
		}
		$favos[]=$record;

	}

}



// var_dump($favos);
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
				<div class="col-md-3 col-xs-12">
		  			<div class="prof-img">	  
						<!-- アイコン写真が飛んでくる -->
						<?php if($_SESSION['login_user']['user_icon']==null){ ?>
							<img src="images/images.png">
						<?php }else{ ?>
							<?php foreach($icons as $icon){ 
								if ($icon['id']==$_SESSION['login_user']['id']) { ?>
									<img src="images/ex_view_images/<?php  echo $icon['user_icon'];?>">
								<?php } ?>
							<?php } ?>
						<?php } ?>
	  					 <div>
	  					 	<!-- usernameが飛んでくる -->
	     					<h2><?php echo $_SESSION['login_user']['username']; ?></h2>
	  					 </div>
						 <div>
	 					  <a href="edit.php" type="button"><i class="fa fa-edit"></i>Edit</a><br>
	 					  <a href="parts/logout.php" type="button"><i class="fa fa-sign-out" aria-hidden="true"></i>LogOut</a>
						 </div>
					</div>
				</div>
					
				<div class="col-md-9 col-xs-12">
						 <!-- 縦に記述 -->
						<h3>投稿一覧</h3><br>
							<!-- 人見コード↓ -->
							<!-- <h3><?php echo $record['user_id']; ?></h3>
							<h2><?php echo $record['text']; ?></h2> -->
							<!-- 人見コードここまで -->


							<!-- 投稿した写真＆コメントが表示される -->							
							<?php foreach($contributions as $contribution){ ?>
							<div class="contribution">
								<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-3">
									<img src="images/ex_view_images/<?php echo $contribution['picture_path'];?>" width="180px" height="180px">
								</div>
								<div class="col-md-9">								
									<span style="font-size: 17px;"><?php echo $contribution['text']; ?></span><br><br>
									<span><?php echo $contribution['address']; ?></span><br><br>		
									<?php echo "投稿日時:" . $contribution['created']; ?><br><br>

									<?php if($_SESSION['login_user']['id']==$_GET['id']){ ?>
                  						<a href="detail_edit.php?id=<?php echo  $contribution['id']; ?>" class="btn btn-success btn-xs">編集</a>
                 						<a href="delete.php?id=<?php echo  $contribution['id']; ?>" class="btn btn-danger btn-xs">削除</a>
              						<?php } ?>
								</div>
								</div>
							</div>
						    <?php } ?>
						    
						
						<h3>お気に入り一覧</h3><br>
						<!-- いいね！押した記事が表示される -->
							<?php foreach($favos as $favo){ ?>
							<?php if($favo['seego_user_id'] == $_GET['id']){ ?>
							<div class="contribution">
								<div class="row" style="margin-bottom: 15px;">
								<div class="col-md-3">
									<img src="images/ex_view_images/<?php echo $favo['picture_path'];?>" width="180px" height="180px">
								</div>
								<div class="col-md-9">								
									<span style="font-size: 17px;"><?php echo $favo['text']; ?></span><br><br>
									<span><?php echo $favo['address']; ?></span><br><br>
									<?php echo "投稿日時:" . $favo['created']; ?>	<br>
									<a href="#" class="btn btn-danger btn-xs">お気に入り解除</a>						
								</div>
								</div>
							</div>
							 <?php } ?>
						    <?php } ?>
					    						
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
