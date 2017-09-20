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

<div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center text-primary">Team</h1>
                        <p class="text-center">We are a group of skilled individuals</p>
                    </div>
                </div>
                <div class="row">
                
                
                    <div class="col-md-4">
                        <img src="https://ununsplash.imgix.net/photo-1417024321782-1375735f8987?q=75&fm=jpg&s=7af3f809a9c1b90b7fcbd71655b661bc"
                        class="img-quadrata center-block" >
                        <h3 class="text-center" >John Doe
                        <br/>
                        <small> Developer</small></h3>
                    </div>
                    <div class="col-md-4">
                        <img src="https://unsplash.imgix.net/reserve/fqUehZ3ZRru2Kh11qDBT_IMG_0042.jpg?q=75&fm=jpg&s=e96c5bfe57acbd6cdfdbe7d84f37656d"
                        class="center-block img-quadrata" >
                        <h3 class="text-center" >John Smith
                        <br/>
                        <small> Web Designer</small></h3>
                    </div>
                    <div class="col-md-4">
                        <img src="https://unsplash.imgix.net/photo-1422222948315-28aadb7a2cb8?q=75&fm=jpg&s=cfeadbd7a991e58b553bee29a7eeca55"
                        class="center-block img-quadrata">
                        <h3 class="text-center">Samantha Reds
                        <br/>
                        <small> Content manager</small></h3>
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
