<?php
$eTabName = 'Upload';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Real Life</title>
  <link rel="stylesheet" type="text/css" href="styles/style_upload.css">
  <script type="text/javascript" src="scripts/upload.js"></script>
</head>
<body>
  <?php
  include('parts/header.php');
  ?>
  <div class="wrapper">
    <!-- このdivたぐの中に書く -->
    <div class="container" align="center">
          <div class="">
      <div class="row">
        <div class="col-lg-12">
            <form method="POST">
              <div class="imgInput">
                <input type="file" name="file1">
              </div><!--/.imgInput-->
              <p form="text"></p>
              <p>
                <label form="coment">Coment</label><br>
                <textarea  cols="50" name="coment" rows="8"></textarea>
              </p>
            </div>
            <p style="margin: 0px;">評価: <span id="eva_tv">0.0</span> / 5.0</p>
            <input type="range" value="0" name="eva" style="width: 250px;" onchange="onEva_change(value)" oninput="onEva_in(value)">
            <input type="submit" value="upload" style="margin-top: 20px;">
          </form>
      </div>
    </div>
  </div>
  <!-- SCRIPT -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>
    $(function(){
      var setFileInput = $('.imgInput');

      setFileInput.each(function(){
        var selfFile = $(this),
        selfInput = $(this).find('input[type=file]');

        selfInput.change(function(){
          var file = $(this).prop('files')[0],
          fileRdr = new FileReader(),
          selfImg = selfFile.find('.imgView');

          if(!this.files.length){
            if(0 < selfImg.size()){
              selfImg.remove();
              return;
            }
          } else {
            if(file.type.match('image.*')){
              if(!(0 < selfImg.size())){
                selfFile.append('<img alt="" class="imgView" style="width:500px;height:500;">');
              }
              var prevElm = selfFile.find('.imgView');
              fileRdr.onload = function() {
                prevElm.attr('src', fileRdr.result);
              }
              fileRdr.readAsDataURL(file);
            } else {
              if(0 < selfImg.size()){
                selfImg.remove();
                return;
              }
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
