<?php
  $eTabName = 'upload';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Real Life</title>
</head>
<body>
  <?php
  include('parts/header.php');
  ?>
  <div class="wrapper">
      <!-- このdivたぐの中に書く -->
  <div class="container">
    <div class="row">
     <div style="margin-top: 20px; text-align: center; width: 100%; height: 300px; background:rgba(48, 113, 170, 0.3); border-radius: 30px; border: solid 2px #6b4a37;">hoge
     </div>
      <div style="margin-left: 15px;" class="row">
        <button>画像をアップロード</button>
      </div>
      <div style="margin-left: 15px;" class="row">
      <form action="cgi-bin/abc.cgi" method="post">
        <p>
        <label form="coment">Coment</label><br>
        <textarea cols="50" name="coment" rows="10"></textarea>
        </p>
      </form></div>
    </div>
  </div>
<!-- フォーム画面は追加でHTMLファイルを作成する？ -->


    <div class="push"></div>
  </div>

  <?php
  include('parts/footer.php');
  ?>
</body>
</html>
