<?php
	$eTabName = 'Mypage';
?>

<!-- ログイン状態のチェック不可 -->



<?php
	session_start();
	require('parts/db_connect.php');

	// ログイン状態かチェック
	// if(!isset($_SESSION['seego_info']['id'])){
	// 	header('Location: index.php');
	// 	exit();
	// }

	if(isset($_SESSION['seego_info']['id'])){

		$sql = 'SELECT * FROM `seego_users` WHERE `id`=?';
		$data = array($_SESSION['seego_info']['id']);
		$stmt = $dbh->prepare($sql);
		$stmt->execute($data);
		$record = $stmt->fetch(PDO::FETCH_ASSOC);
      	header('Location: mypage.php');
      	exit();
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
	<form method="POST" action="" enctype="multipart/form-data">
	<div class="wrapper">
			<!-- このdivたぐの中に書く -->
		<div class="container">
			<div class="row">					
				<div class="col-xs-3">
		  			<div class="prof-img">	  
						ここ編集中！！
						<!-- アイコン写真が飛んでくる -->
						<?php if($_SESSION['seego_info']['user_icon']==null){ ?>
							<img src="images/images.png">
						<?php }else{ ?>
							<img src="images/<?php echo $_SESSION['seego_info']['user_icon'];?>">
						<?php } ?>
	  					 <div>
	  					 	<!-- usernameが飛んでくる -->
	     					<h2><?php echo $_SESSION['seego_info']['username']; ?></h2>
	  					 </div>
						 <div>
	 					  <a href="edit.php" type="button"><i class="fa fa-edit"></i>Edit</a><br>
	 					  <a href="signup.php" type="button"><i class="fa fa-sign-out" aria-hidden="true"></i>LogOut</a>
						 </div>
					</div>
				</div>
					
				<div class="col-xs-9">
					<div class="row">
						 <!-- 縦に記述 -->
						<h3>投稿一覧</h3><br>
						<!-- 投稿した写真＆コメントが表示される -->
						<div class="col-xs-3">
						<div>
							<img width="180px" height="180px" src="images/IMG_1592.JPG" alt="">
						</div><br>
						
						<div>
							<img width="180px" height="180px" src="images/city.jpg" alt="">
						</div><br>
						
						<h3>お気に入り一覧</h3><br>
						<!-- いいね！押した記事が表示される -->
						<div>
							<img width="180px" height="180px" src="images/IMG_0427.JPG" alt="">
						</div><br>
						
						<div>
							<img width="180px" height="180px" src="images/CIMG0388.JPG" alt="">
						</div><br>
						</div>

						<div class="col-xs-9">
							<textarea class="contribution" style="width: 85%; height: 180px; border: solid 2px #001a42 " rows="5"></textarea><br>
							<textarea class="contribution" style="width: 85%; height: 180px; border: solid 2px #001a42 " rows="5"></textarea><br><br><br>
							<textarea class="contribution" style="width: 85%; height: 180px; border: solid 2px #001a42 " rows="5"></textarea><br>
							<textarea class="contribution" style="width: 85%; height: 180px; border: solid 2px #001a42 " rows="5"></textarea>
						</div>
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
