<?php
    $eTabName = 'Contact';
?>

<?php
    $nickname = '';
    $email = '';
    $content = '';

        if(!empty($_POST)){

            $nickname = htmlspecialchars($_POST['nickname']);
            $email = htmlspecialchars($_POST['email']);
            $content = htmlspecialchars($_POST['content']);
        
            $errors=array();
        
            if($nickname == ''){
                $errors['nickname'] = 'blank';
            }

            if($email == ''){
                $errors['email'] = 'blank';
            }

            if($content == ''){
                $errors['content'] = 'blank';
            }
        }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="styles/style_contact.css">
</head>
<body> 
    <?php 
        include("parts/header.php"); 
    ?> 
    <div class="wrapper">
        <div class="container" style="">
            <div class="row">
            <form method="POST" action="complete.php" enctype="multipart/form-data" target="_top" onSubmit="return startConfirm()">
                <div class="col-lg-offset-2 col-lg-8">
                    <div class="back-style">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="logo">
                                    <h1>お問い合わせ</h1>
                                </div>
                                <div class="form">
                                    <label>NickName</label><br>                     
                                    <input class="form-control" type="text" name="nickname" id="nick" required style="width: 300px; border: solid 2px #001a42 ">
                                        <?php if(isset($errors['nickname'])){ ?>
                                            <div class="alert alert-danger">
                                                ニックネームを入力してください。
                                            </div>
                                        <?php } ?>

                                    <label>Mail Address</label><br>                        
                                    <input id="email" class="form-control" type="email" name="email" required style="width: 300px; border: solid 2px #001a42 ">
                                    <?php if(isset($errors['email'])){ ?>
                                        <div class="alert alert-danger">
                                            メールアドレスを入力してください。
                                        </div>
                                    <?php } ?>

                                    <label>Content</label><br>                       
                                    <textarea id="content" class="form-control" name="content" rows="10" required style="width: 300px; border: solid 2px #001a42 "></textarea>
                                    <?php if(isset($errors['content'])){ ?>
                                        <div class="alert alert-danger">
                                            お問い合わせ内容を入力してください。
                                        </div>
                                    <?php } ?>                    
                
                                          
                                    <input type="submit" class="btn btn-lg" onclick="contact()" value="送信">
                                    
                                </div>
                            </div>
                        </div> 
                        <!-- back-style (row) -->
                    </div>
                    <!-- back-style -->
                </div>
                <div class="col-lg-offset-2"></div>
            </form>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <script type="text/javascript">
        function startConfirm(){
            var nick = $('#nick').val();
            var email = $('#email').val();
            var content = $('#content').val();
            var hoge = "Nickname:"  + nick + "\nEmail:" + email + "\nContent:" + content + "\n上記の情報で送信してもよろしいでしょうか。";

            if (nick !="" && email.match(/@/) && email !="" && content !="") {
                return(confirm(hoge));                 
            } else {
               if (nick =="" || email =="" || content =="") {
                alert("入力項目を全て入力してください。");
            } 
            }
        }
    </script>
        <footer>
            <?php   include("parts/footer.php"); ?>
        </footer>
    </body>
</html>  