<?php
  $eTabName = 'check.php';

  session_start();
  require('parts/dbconnect.php');

  if (!isset($_SESSION['user_info'])) {
    header('location: signup.php');
    exit();
  }


  if(!empty($POST)){

    $username = $_SESSION['user_info']['username'];
    $email = $_SESSION['user_info']['email'];
    $password = $_SESSION['user_info']['password'];
    $password2 = $_SESSION['user_info']['password2'];
  

  $sql = 'INSERT INTO `users` SET `username`=?
                                  `email`=?
                                  `password`=?
                                  `password2`=?
                                  `created` =NOW()
  ';
    var_dump($_SESSION['user_info']);
    $data = array($username,$email,$password,$password2);
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    header('location: complete.php');
    exit();                                  
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>最終確認</title>
</head>
<link rel="stylesheet" type="text/css" href="styles/style_check.css">
<body>
  <?php
  include('parts/header.php');
  ?>
  <div class="wrapper" >
      <!-- このdivたぐの中に書く -->
    <div class="container" align="center">
      <div class="form">
          <div class="row">
            <div class="col-lg-12">
                <div>
                  <h1>情報入力最終確認</h1><br>
                  <h3>以下の内容でお間違い無いですか？</h3><br>
                    ユーザー名　　:<?php echo $_SESSION['user_info']['username']; ?><br>
                    メールアドレス:<?php echo $_SESSION['user_info']['email']; ?><br>
                    パスワード(忘れないでください)<br>
                    <?php echo $_SESSION['user_info']['password']; ?><br>
                </div>
                <div>
                    <form method="POST" action="signup.php">
                        <input type="submit" value="やり直す">
                    </form>
                    <form method="POST" action="complete.php"><input type="submit" value="送信"></form>
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
