<?php
$eTabName = 'detail';
require('parts/db_connect.php');

session_start();


if(!isset($_GET['id'])){
  header('Location: timeline.php');
  exit();
}

  $sql ='SELECT `user_id`,`text`,`address`,`picture_path` FROM `seego_pictures` WHERE `id`=?';
  $data = array($_GET['id']);
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);

  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  

  // var_dump($rec);
  // echo '<br>';
  // echo '<br>';

  $sql ="SELECT `seego_pictures`.`id`,`user_id`,`username` FROM `seego_pictures`,`seego_users` WHERE `seego_pictures`.`user_id` = `seego_users`.`id`";
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);

  

	

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
						<div style="text-align: center; margin-top: 20px;">
				    		<img src="images/ex_view_images/<?php echo $rec['picture_path'];?>" width="90%">
				    	</div>
				   		<br>
						<?php
							$data=array();
    						while (1) {
    							$rec2 = $stmt->fetch(PDO::FETCH_ASSOC);
     							if ($rec2 == false) {
         							break;
    							}

    							if($rec2['id'] == $_GET['id']){
									$rec2['username'];
    							?>
								<h1><?php echo $rec2['username']; ?></h1>

								<?php } ?>
						<?php } ?>
						<br>
						<h3><?php echo $rec['text']; ?></h3>
						<br>
						<h3><?php echo $rec['address']; ?></h3>
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