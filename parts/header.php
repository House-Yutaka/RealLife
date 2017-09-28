<?php 
	include('parts/login.php');
 ?>

<head>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="lib/boostrap/css/bootstrap.css">
	<script src="lib/boostrap/js/bootstrap.js" ></script>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="">
	<script src="https://use.fontawesome.com/5ba948e746.js"></script>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css' type='text/css' media='all' />
	<script type="text/javascript" src="scripts/login.js"></script>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="margin: 0px">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Navbar" aria-expanded="false">
					<span class="sr-only">メニュー</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand faa-parent animated-hover" style="color: #FFBF00;" href="index.php"><i class="fa fa-globe fa-fw faa-spin" aria-hidden="true" style="font-size: 20px;"></i>SEEGO</a>
			</div>



			<div id="Navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">

					<?php include("creatingTab.php"); ?>

				</ul>
				<ul class="nav navbar-nav navbar-right">

					<?php if ("ログインしてる?" == "false" || true) { ?>
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background: #000000;"><span class="loginstyle faa-parent animated-hover"><i class="fa fa-sign-in fa-fw faa-horizontal" aria-hidden="true"></i>LogIn<b class="caret"></b></span></a>
						<ul class="dropdown-menu dropdownStyle">

							<form>
								<li>Email<input type="text" name="" class="square_tv" oninput="onUsername(value)" id="inputUsername"></li>
								<li>Password<input class="square_tv" type="password" name="" oninput="onPassword(value)" id="inputPassword"></li>
								<input type="submit" name="submit" style="display: none;" onchange="$('#fake_submit').val($(this).val())" value="send" id="Submit" disabled>
								<button id="fake_submit" onClick="$('#submit').click();" class="square_btn" disabled><i id="submitIcon" class="fa fa-sign-in fa-lg faa-horizontal fa-fw" aria-hidden="true"></i>Log in</button>
							</form>
							<li class="aElement"><a href="/RealLife/signup.php">Registration</a></li>	
						</ul>
					</li>
					<?php }?>

					<?php if ("ログインしてる?" == "true") { ?>
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background: #000000;"><span class="loginstyle">[ICON]username<b class="caret"></b></span></a>
						<ul class="dropdown-menu dropdownStyle">
							<li class="aElement"><a href="#">My Page</a></li>
							<li class="aElement"><a href="/SEEGO/signup.php">Registration</a></li>						
						</ul>
					</li>

					<?php }?>

					
				</ul>

			</div>
		</nav>
	</div>
</body>
