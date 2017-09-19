<?php
	$eTabName = 'Home';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real Life</title>
	<link rel="stylesheet" type="text/css" href="styles/style_index.css">
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
				<div class="back-style">
					<div class="col-offset-lg-1 col-lg-11">
						<div class="row">
							<div class="col-lg-12">
								<form action="">
            						<input type="text" value="東京スカイツリー" id="address">
            						<input type="button" value="地図検索" id="button" onclick="getLatLng(document.getElementById('address').value); return(false);">
        						</form>
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

	<?php
		include('parts/footer.php');
	?>

	<script type="text/javascript" src="scripts/index.js"></script></div>
</body>
</html>
