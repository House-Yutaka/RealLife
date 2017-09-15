<head>
	<meta charset="utf-8">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="lib/boostrap/css/bootstrap.css">
	<script src="lib/boostrap/js/bootstrap.js" ></script>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="">
	<script src="https://use.fontawesome.com/5ba948e746.js"></script>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css' type='text/css' media='all' />

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Navbar" aria-expanded="false">
					<span class="sr-only">メニュー</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand faa-parent animated-hover" style="color: #FFBF00;" href="index.php"><i class="fa fa-globe fa-fw faa-spin" aria-hidden="true" style="font-size: 20px;"></i>RealLife</a>
			</div>



			<div id="Navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php switch ($eTabName){
						case 'home': ?>
						<li><a href="" class="faa-parent animated-hover" class="selectedTab" style="background: #000000;"><i class="fa fa-home fa-fw faa-ring" aria-hidden="true"></i>Home</a></li>
						<li><a href="" class="faa-parent animated-hover"><i class="fa fa-meh-o fa-fw faa-ring" aria-hidden="true"></i>Mypage</a></li>
					<?php break; 
						case 'mypage':?>
						<li><a href="" class="faa-parent animated-hover"><i class="fa fa-home fa-fw faa-ring" aria-hidden="true"></i>Home</a></li>
						<li class="selectedTab"><a href="" class="faa-parent animated-hover" style="background: #000000"><i class="fa fa-meh-o fa-fw faa-ring" aria-hidden="true"></i>Mypage</a></li>		
					<?php break;
						default:?>
						<li><a href="" class="faa-parent animated-hover"><i class="fa fa-home fa-fw faa-ring" aria-hidden="true"></i>Home</a></li>
						<li><a href="" class="faa-parent animated-hover"><i class="fa fa-meh-o fa-fw faa-ring" aria-hidden="true"></i>Mypage</a></li>
					<?php break; 
					} ?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="loginstyle faa-parent animated-hover"><i class="fa fa-sign-in fa-fw faa-horizontal" aria-hidden="true"></i>LogIn<b class="caret"></b></span></a>
						<ul class="dropdown-menu" style="padding: 2px;">
						<?php if ("ログインしてる?" == "false" || true) { ?>
								<li>Username<input type="text" name=""></li>
								<li>Password<input type="password" name=""></li>
								<li><input type="submit" name="" value="Login"></li>
						<?php }?>
							
						<?php if ("ログインしてる?" == "true") { ?>
							<li><a href="#">My Page</a></li>
							<li><a href="#">Registration</a></li>
						<?php }?>

						</ul>
					</li>
				</ul>

			</div>
		</nav>
	</div>
</body>