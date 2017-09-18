<?php
  $eTabName = 'Upload';
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
      <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
      </form>
        <div style="text-align: center; margin-left: 15px;" class="row">
          <form action="cgi-bin/abc.cgi" method="post">
            <p>
              <label form="coment">Coment</label><br>
              <textarea  cols="50" name="coment" rows="8"></textarea>
            </p>
          </form>
        </div>
      <input type="submit" value="upload">
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
