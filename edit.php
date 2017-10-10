<?php
	$eTabName = 'Edit';
    session_start();
    
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
    
    <?php
    $user_icon = 'images/images.png';
    $username = '';
    $email = '';
    $password = '';
    
    if(!empty($_POST)){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        
        $errors=array();
        
        if($username == ''){
            $errors['username'] = 'blank';
        }

        if($email == ''){
            $errors['email'] = 'blank';
        }

        if($password == ''){
            $errors['password'] = 'blank';
        }elseif(strlen($password) < 6){
            $errors['password'] = 'length';
        }


        $fileName = $_FILES['profile_image_path']['name'];
        
        if(!empty($fileName)){
            $ext = substr($fileName, -3);

            var_dump($fileName);
            $ext = strtolower($ext);
            if($ext != 'jpg' && $ext !='png' && $ext != 'gif'){
                $errors['profile_image_path'] = 'extension';
            }
            
            if(empty($errors)){
            move_uploaded_file($_FILES['profile_image_path']['tmp_name'], 'images/'.$_FILES['profile_image_path']['name']);
            }
            }
        

        $sql = 'UPDATE `seego_users` SET `username`=?,`email`=?,`password`=?,`user_icon`=? WHERE `id`=?';
        $data = array($username,$email,$password,$user_icon);
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);


        header('Location: mypage.php');
        exit();
    }
    ?>


        <div class="container">
		<div class="change">
            <div class="row">
            <form method="POST" action="check.php" enctype="multipart/form-data">
                <div class="col-lg-12">
                	<div class="imgInput">
                    <input type="file" name="profile_image_path" accept="image/*" style="display: inline-block; text-align: center;">
                    <img src="images/images.png" alt="" class="imgView">
                        <br><br>
                        <?php if(isset($errors['profile_image_path'])){ ?>
                            <div class="alert alert-danger">
                            使用できる拡張子はjpgまたはpngまたはgifのみです。
                            </div>
                        <?php } ?>
                        <br>
                	</div>
                </div>
                <div class="col-lg-12">
                	<div class="form">
                    
                        <label>Name</label><br>                        
                            <input class="form-control" type="text" name="username" required style="width: 300px; border: solid 2px #001a42 " value="<?php echo $_SESSION['login_user']['username']; ?>">
                            <?php if(isset($errors['username'])){ ?>
                                <div class="alert alert-danger" required style="width: 300px;">
                                ニックネームを入力してください。
                                </div>
                            <?php } ?>

                         <label>e-mail</label><br>                        
                            <input class="form-control" type="email" name="email" required style="width: 300px; border: solid 2px #001a42 " value="<?php echo $_SESSION['login_user']['email']; ?>">
                            <?php if(isset($errors['email'])){ ?>
                                 <div class="alert alert-danger">
                                    メールアドレスを入力してください。
                                </div>
                            <?php } ?>

                        <label>password</label><br>                        
                            <input class="form-control" type="password" name="password" required style="width: 300px; border: solid 2px #001a42 ">
                            <?php if(isset($errors['password']) && $errors['password'] == 'blank'){ ?>
                                <div class="alert alert-danger">
                                    パスワードを入力してください。
                                </div>
                            <?php }elseif(isset($errors['password']) && $errors['password'] == 'length'){ ?>
                                <div class="alert alert-danger">
                                    パスワードは6文字以上を入力してください。
                                </div>
                            <?php } ?> 


                        
                        <input type="submit" class="btn btn-lg" value="プロフィール変更">
                    
                    </div>                               
        		</div>
            </form>
            </div>
        </div>
        </div>
<!-- ◆SCRIPT -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(function(){
    var setFileInput = $('.imgInput'),
    setFileImg = $('.imgView');
 
    setFileInput.each(function(){
        var selfFile = $(this),
        selfInput = $(this).find('input[type=file]'),
        prevElm = selfFile.find(setFileImg),
        orgPass = prevElm.attr('src');
 
        selfInput.change(function(){
            var file = $(this).prop('files')[0],
            fileRdr = new FileReader();
 
            if (!this.files.length){
                prevElm.attr('src', orgPass);
                return;
            } else {
                if (!file.type.match('image.*')){
                    prevElm.attr('src', orgPass);
                    return;
                } else {
                    fileRdr.onload = function() {
                        prevElm.attr('src', fileRdr.result);
                    }
                    fileRdr.readAsDataURL(file);
                }
            }
        });
    });
});
</script>
		<div class="push"></div>
	</div>

	<?php
	include('parts/footer.php');
	?>
</body>
</html>

                        <img alt="userpic" src="<?php echo $user_icon; ?>"><br><br>
                        <input type="file" name="profile_image_path" accept="image/*" style="display: inline-block; text-align: center;">
