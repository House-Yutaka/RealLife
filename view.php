<?php
	$eTabName = 'View';

	$viewCnt = 10;
	$imgSrc = array("images/ex_view_images/view.jpg",
	 "images/ex_view_images/view2.jpg");
	$userid = array("Tomoya", "Doraemon");
	$userIcon = array("images/ex_view_images/usericon.png",
		"images/ex_view_images/usericon2.jpg");
	$title = array("フィリピン料理", "浄ノ池特有魚類生息地");
	$texts = array("フィリピン料理は、中国やかつての宗主国であるスペインの食文化の影響を受けている。他の東南アジア諸国では様々な王朝の宮廷の料理人が洗練された料理を造り出していたが、フィリピンに宮廷料理は存在しない……",
		"浄ノ池特有魚類生息地（じょうのいけとくゆうぎょるいせいそくち）とは、静岡県伊東市和田1丁目にかつて存在した、国の天然記念物に指定されていた小さな池である.水面面積わずか15坪のこの池は、池底より温泉が常に湧出していた[1]ため、水温が年間を通じ摂氏約26℃から28℃の微温湯に保たれて...");
	//カサ増し
	for ($i=0; $i < $viewCnt; $i++) { 
		array_push($imgSrc, $imgSrc[$i%2]);
		array_push($userid, $userid[$i%2]);
		array_push($userIcon, $userIcon[$i%2]);
		array_push($texts, $texts[$i%2]);
		array_push($title, $title[$i%2]);

	}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="styles/style_view.css">
	<title>Real Life</title>
</head>
<body>
	<?php
		include('parts/header.php');
	?>
	<div class="wrapper">


	<div class="container">

	<?php for ($i=0; $i < $viewCnt; $i++) { ?>
		<div class="row square_box" >
			<div class="col-xs-3" style="padding:0px;">
			
					<img class="trim_img" src="<?php echo $imgSrc[$i]; ?>">
					
			</div>
			<div class="col-xs-9" style="padding:0px;">
				<div class="col-xs-12" style="font-size: 15px;padding:0px;">
					<h4 class="yellowColor">"<?php echo $title[$i]; ?>"</h4>
				</div>
				<div class="col-xs-12" style="padding:0px;">
					<p style="word-wrap: break-word; height: 80px; color: black; margin-right: "><?php echo $texts[$i]; ?></p>
				</div>
				<div class="col-xs-12" style="height: 20px; text-align: right;">
					<img src="<?php echo $userIcon[$i]; ?>" style="width: 20px;height: 20px; margin-right: 3px;"><span style="color: black;"><?php echo $userid[$i]; ?></span>
				</div>
			</div>
		</div>

		<?php } ?>
	</div>



		<div class="push"></div>
	</div>

	<?php
		include('parts/footer.php');
	?>
</body>
</html>