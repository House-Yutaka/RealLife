<?php
	$eTabName = 'About';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/style_about.css">
	<title>About us</title>
</head>
<body background="images/background_paper.jpg">
	<?php
	include('parts/header.php');
	?>
	<div class="wrapper">
		<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <!-- <div class="overlay"></div> -->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>あなたの”as usual”が誰かの”something special”に</h1>        
            <h3>リアル現地情報共有サイト</h3>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Serch</h1>        
            <h3>観光地には飽きた！情報収集に苦戦している方！という方</h3>
        </hgroup>       
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>Share information</h1>        
            <h3>あなたの経験をみんなとシェア</h3>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
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
