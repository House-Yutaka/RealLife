<?php
$eTabName = 'Home';
	session_start();


require('parts/db_connect.php');

    $sql = 'SELECT * FROM `seego_pictures`';
    $stmt = $dbh->prepare($sql); 
    $stmt->execute();
    
    $data=array();
    while (1) {
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
     if ($rec == false) {
         break;
    }
        // echo $rec['place'];
        $add[]=$rec;
        $pic[]=$rec['picture_path'];

        
    }



// ３．データベースを切断する
$dbh = null;





?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SEEGO</title>
	<link rel="stylesheet" type="text/css" href="styles/style_index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- google map API -->
	<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBwDNqfLmMufOTLpgGEYoS8b3jrYbtlf-A"></script>
	
</head>
<body>
	<?php
		include('parts/header.php');
	?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-1"></div>
				<div class="back-style">
					<div class="col-lg-11">
						<div class="row">
							<div class="col-lg-offset-1 col-lg-11">
								<!-- <form action="" method="POST">
            						<input type="text"  name="location" id="address" placeholder="東京スカイツリー">
           							<input type="submit" value="地図検索" id="button">
                					<br>
                					<a href="signup.php">ユーザー登録</a>
                					<a href="login.php">ログイン</a>
            					 </form> -->
								<!-- 地図を表示させる要素 -->
								<div id="map-canvas"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="push"></div>
	</div>
	<script type="text/javascript" src="scripts/index.js"></script>
         <script type="text/javascript">
            var address = <?php echo json_encode($add); ?>;
            var picture = <?php echo json_encode($pic); ?>;
            var contentStr = '';
            for (var i in address) {
            contentStr = '<div style="width: 80px; height: 80px;">'
           + '<p><a href="detail.php?id='　+ address[i]['id'] +'"><img src="images/ex_view_images/' + picture[i] + '" width="70"></a></p>';
                getLatLng(address[i]['address'],contentStr);
            }

        </script>
        <script src="https://82mou.github.io/infobox/lib/infobox.js"></script>

	<?php
		include('parts/footer.php');
	?>
</body>
</html>
