<?php
  $eTabName = 'check.php';

  session_start();
  require('../dbconnect.php');

  if (!isset($_SESSION['user_info'])) {
    header('location: signup.php');
    exit();
  }


  if(!empty($POST)){

    $username = $SESSION['user_info']['username'];
    $username = $SESSION['user_info']['email'];
    $username = $SESSION['user_info']['password'];
    $username = $SESSION['user_info']['password2'];
  }

  $sql = 'INSERT INTO `users` SET `username`=?
                                  `email`=?
                                  `password`=?
                                  `password2`=?
                                  `created` =NOW()
  ';
var_dump($_SESSION['user_info']);
$data = array()                                  


?>

<!DOCTYPE html>
<html>
<head>
  <title>最終確認</title>
</head>
<body style="">
  <?php
  include('parts/header.php');
  ?>
  <div class="wrapper">
      <!-- このdivたぐの中に書く -->
      <h1 style="text-align: center;">情報入力最終確認</h1>
      <h3 style="text-align: center;">以下の内容でお間違い無いですか？</h3>
      <p style="text-align: center;">Nickname</p>
      <p style="text-align: center;">Email</p>
  <div style="text-align: center;">
    <input type="submit" value="戻る"><input type="submit" value="送信">
  </div>  
  <div style="text-align: center;">
    
  </div>
    <div class="push"></div>
  </div>

  <?php
  include('parts/footer.php');
  ?>
</body>
</html>
