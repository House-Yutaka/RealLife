<?php
  $eTabName = 'check.php';

  session_start();
  require('parts/db_connect.php');

  // if (!isset($_SESSION['login_user'])) {
  //   header('Location: signup.php');
  //   exit();
  // }

  // 登録ボタンを押したら処理開始
  if(!empty($_POST)){

    $username = $_SESSION['login_user']['username'];
    $email = $_SESSION['login_user']['email'];
    $password = $_SESSION['login_user']['password'];
  

  $sql = 'INSERT INTO `seego_users` SET `username`=?,`email`=?,`password`=?,`created` =NOW()';
    // var_dump($_SESSION['user_info']);

    $data = array($username,$email,sha1($password));
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    header('Location: complete.php');
    exit();                                  
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>CheckPage</title>
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
                    ユーザー名　　:<?php echo $_SESSION['login_user']['username']; ?><br>
                    メールアドレス:<?php echo $_SESSION['login_user']['email']; ?><br>
                    パスワード(忘れないでください)<br>
                    <?php echo $_SESSION['login_user']['password']; ?><br>
                </div>
                <div>
                    <form method="POST" action="signup.php">
                        <input type="submit" value="やり直す">
                    </form>
                    <form method="POST" action="">
                        <input type="hidden" name="action" value="submit">
                        <input type="submit" value="登録">
                    </form>
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
