<?php
$eTabName = 'detail';
require('parts/db_connect.php');

session_start();

if(!isset($_SESSION['login_user']['id'])){
    header('Location: login.php');
    exit();
}

// ここはログインしたユーザーが通る
// パラメータチェック
if(!isset($_GET['id'])){
  header('Location: timeline.php');
  exit();
}
  $sql = 'SELECT friends.id, name, area_id, gender, created, modified, area FROM friends,areas WHERE friends.area_id=areas.id';
  $data = array($_GET['id']);
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);

  // 1件のみなので、Whileでループさせず、一件目のみFetchする
  $record = $stmt->fetch(PDO::FETCH_ASSOC);

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