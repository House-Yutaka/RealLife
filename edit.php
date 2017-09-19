<?php
	$eTabName = 'Edit';
?>

<!DOCTYPE html>
<html>
<head>
	<title>会員情報編集</title>
	<link rel="stylesheet" type="text/css" href="styles/style_edit.css">
</head>
<body>
	<?php
	include('parts/header.php');
	?>
	<div class="wrapper">
		<div class="container">
		<div class="change">
            <div class="row">
                <div class="col-lg-12">
                	<div>
                		<img alt="User Pic" src="images/CIMG0388.JPG">
                	</div>
                </div>
                <div class="col-lg-12">
                	<div class="form">
                        <label>Name</label><br>                        
                            <input class="form-control" type="text" name="nickname" required style="width: 300px; border: solid 2px #001a42 ">
                         <label>e-mail</label><br>                        
                            <input class="form-control" type="text" name="nickname" required style="width: 300px; border: solid 2px #001a42 ">
                        <label>password</label><br>                        
                            <input class="form-control" type="text" name="nickname" required style="width: 300px; border: solid 2px #001a42 "> 
                        <label>一言</label><br>                       
                            <textarea class="form-control" name="content" rows="10" required style="width: 300px; border: solid 2px #001a42 "></textarea>
                        <button type="subimit" class="btn btn-lg">プロフィール変更</button>
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
</body>
</html>
