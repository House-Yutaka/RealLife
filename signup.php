<?php
  $eTabName = 'signup';
?>

<!DOCTYPE html>
<html>
<head>
  <title>会員登録</title>
</head>
<body>
  <?php
  include('parts/header.php');
  ?>
  <div class="wrapper">
      <!-- このdivたぐの中に書く -->
<div style="text-align: center;">
<h1>User情報入力</h1>
</div>
  <div style="text-align: center; width: 40%; margin-left: 30%; height: 300px; background: rgba(48, 113, 170, 0.3); border-radius: 30px; border: solid 2px #6b4a37;">
  
  <form method="POST" action="check.php">
     <div style="text-align: center; margin-top: 40px;">
        Nickname<br>
        <input type="text" name="nickname" style="width:100px; border: solid 2px #6b4a37;">
     </div>
     <div style="text-align: center; ">
        Email<br>
        <input type="text" name="email" style="width:200px; border: solid 2px #6b4a37;">
     </div>
    <div style="text-align: center;">
        Password<br>
        <input type="text" name="password" style="width: 200px; border: solid 2px #6b4a37;">
    </div>
    <div style="text-align: center;">
        Retype Password<br>
        <input type="text" name="password" style="width: 200px; border: solid 2px #6b4a37;">
    </div>
    <div style="text-align: center; margin-top: 20px;">
    <input type="submit" value="送信">
    </div>
    </form>
</div>
    <div style="margin-top: 300px;">
      <?php include('parts/footer.php'); ?>
    </div>

    <div class="push"></div>
  </div>

</body>
</html>



