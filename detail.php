<?php
$eTabName = 'detail';
session_start();
// require('db_connect.php');

// if(!isset($_SESSION['login_user']['id'])){

//     header('Location: login.php');
//     exit();
// }




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
		<div class="col-lg-offset-2 col-lg-8">
			<div class="row">
				<div class="col-lg-12">
					<div class="back-style">
						<h1 style="text-align: center;">Hello.World</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-offset-2"></div>
	</div>
</div>


<?php
  include('parts/footer.php');
?>

</body>
</html>