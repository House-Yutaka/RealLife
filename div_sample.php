<!DOCTYPE html>
<html>
<head>
	<title>div_sample</title>
<style type="text/css">
	.square_tv{
	  width: 100%;
 	 border-radius: 10px;
 	 padding: 0.3em 1em;
 	 border: solid 2px #6b4a37;
	}

</style>

</head>
<body>

<?php
	include("parts/header.php");
?>


<div style="text-align: center; width: 60%; margin-left: 20%; margin-top: 100px;height: 300px; background: rgba(243, 201, 17, 0.3); border-radius: 30px; border: solid 2px #001a4b">
	
	<form>
		<div style="height: 30px;"></div>
		
	</form>

</div>




<!-- <h1 class="lead" style="text-align: center;">お問い合わせ</h1>

	<div style="width: 60%; margin-left: 20%; margin-right: 20%;background: rgba(69,27,15,0.1); height: auto; text-align: center;" class="square_tv">

		<?php
			for ($i=0; $i < 10 ; $i++) { 
				echo "HELLO" . "<br>";
			}
		?>

	</div>
 -->


<?php
	include("parts/footer.php");
?>


</body>
</html>