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



  	<?php
  		include('parts/footer.php');
  	?>

</body>
</html>