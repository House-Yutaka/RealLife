<?php
  $eTabName = 'check.php';
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
