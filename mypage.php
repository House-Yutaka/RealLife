<?php
	$eTabName = 'Mypage';
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
			<!-- このdivたぐの中に書く -->
			<div class="container" align="center">
				<div class="userinfo">
					<div class="row">					
						<div class="col-lg-12">												
							<img class="userpic" alt="User Pic" src="images/CIMG0388.JPG"><br>
						<div class="form">
							<label>Name</label><br>
							<input class="form-control" type="text" name="nickname" required style="width: 300px; border: solid 2px #001a42 ">
							<label>一言</label><br>                       
                            <textarea class="form-control" name="content" rows="10" required style="width: 300px; border: solid 2px #001a42 "></textarea>
           <a href="signup.php" class="btn btn-danger btn-xs">ログアウト</a>

						</div>	
						</div>						
					</div>					
				</div>				
			</div>

			
			<div class="container">			
				<div class="row">
				<h2>投稿一覧</h2><br>
					<!-- 投稿した写真＆コメントが表示される -->
					<div class="col-xs-3">
						<img width="180px" height="180px" src="images/IMG_1592.JPG" alt="">
					</div>
					<div class="col-xs-9" align="center">
						<textarea class="contribution" required style="width: 85%; height: 180px; border: solid 2px #001a42 " rows="5"></textarea>						
					</div>
					<div class="col-xs-3">
						<img width="180px" height="180px" src="images/city.jpg" alt="">
					</div>
					<div class="col-xs-9" align="center">
						<textarea class="contribution" required style="width: 85%; height: 180px; border: solid 2px #001a42 " rows="5"></textarea>						
					</div>

				</div>											
			</div>

			<div class="container">			
				<div class="row">
				<h2>お気に入り一覧</h2><br>
					<!-- いいね！押した記事が表示される -->
					<div class="col-xs-3" align="left">
						<img width="180px" height="180px" src="images/IMG_0427.JPG" alt="">
					</div>
					<div class="col-xs-9" align="center">
						<textarea class="contribution" required style="width: 85%; height: 180px; border: solid 2px #001a42 " rows="5"></textarea>						
					</div>
					<div class="col-xs-3" align="left">
						<img width="180px" height="180px" src="images/CIMG0388.JPG" alt="">
					</div>
					<div class="col-xs-9" align="center">
						<textarea class="contribution" required style="width: 85%; height: 180px; border: solid 2px #001a42 " rows="5"></textarea>						
					</div>
				</div>											
			</div>




		<div class="push"></div>
	</div>

	<?php
		include('parts/footer.php');
	?>
</body>
</html>
