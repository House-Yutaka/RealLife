<?php
  $eTabName = 'signup';
?>

<!DOCTYPE html>
<html>
<head>
  <title>会員登録</title>
<link rel="stylesheet" type="text/css" href="styles/style_signup.css">
</head>
<body>
  <?php
  include('parts/header.php');
  ?>
  <div class="wrapper">
      <!-- このdivたぐの中に書く -->
  <h1 style="text-align: center;">User情報入力</h1>
    <div class="container">
      <div class="change">
        <div class="row">
          <div clss=".col-lg-12">
            <form method="POST" action="check.php">
                <div style="text-align: center; margin-top: 40px;">
                    Nickname<br>
                    <input type="text" name="nickname" class="text">
                </div>
                <div style="text-align: center; ">
                    Email<br>
                    <input type="text" name="email" class="text">
                </div>
                <div style="text-align: center;">
                    Password<br>
                    <input type="text" name="password" maxlength="8" class="text">
                </div>
                <div style="text-align: center;">
                    Retype Password<br>
                    <input type="text" name="password" maxlength="8" class="text">
                </div>
                <div style="text-align: center; margin-top: 20px;">
                    <input type="submit" value="送信">
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="push"></div>
  </div>
    <div>
      <?php include('parts/footer.php'); ?>
    </div>
</body>
</html>



