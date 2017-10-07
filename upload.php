<?php
$eTabName = 'Upload';
?>
<?php 
// 各入力項目の設定、検証
  session_start();

   if (empty($_SESSION['login_user'])) {
     //一度も入力せずに飛んだ人は登録画面へ飛ばす。
     header('Location: signup.php');
     exit();
   }

    $text = '';
    $address = '';

if(!empty($_POST)){

  $text = $_POST['text'];
  $address = $_POST['address'];
  
  $errors = array();

  // 住所の検証
  if ($address == '') {
    $errors['address'] = 'blank';
  }
  // コメントの検証
  if ($text == '') {
    $errors['text'] = 'blank';
  }

  if (empty($errors)) {


      // var_dump($_FILES);
      // move_uploaded_file(引数１、関数２)関数
      // 画像をアップロードするための関数

      $fileName = $_FILES['profile_image_path']['name'];

      if(!empty($fileName)){
      //$_FILES['key' = formのname要素]
      // 画像の拡張子チェック

      var_dump($fileName);

        //後ろ3文字を抜き出す
        $ext = substr($fileName,-3);
        //アルファベットをすべて小文字にする関数。
        $ext = strtolower($ext);
        echo '拡張子は' . $ext . '<br>';
        if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif') {
            $errors['profile_image_path'] = 'extension';
        }
      }else{
          $errors['profile_image_path'] = 'blank';
      }

    if (empty($errors)){
      //確認ページへ飛ばす。

      // すべてのチェックでエラーがなければ画像アップロード
        move_uploaded_file($_FILES['profile_image_path']['tmp_name'], 'images/upload_file'.$fileName);
        
        //check.phpへリダイレクト
        // $_SESSION スーパーグローバル変数
        // データを一時的に保存する
        // 一時的なものなので長期間は保存できないので注意が必要
        // $_SESSION['user_info']['user_id'] = $user_id;
        $_SESSION['login_user']['address'] = $address;
        $_SESSION['login_user']['text'] = $text;
        $_SESSION['login_user']['eva'] = $_POST['eva'];
        $_SESSION['login_user']['profile_image_path'] = $fileName;

    //check.phpに飛ぶ
    header('location: upload_check.php');
    exit();
  }
 }
}
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>PicUpLoad</title>
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
      <div class="picup">
        <div class="row">
          <div class="col-lg-12">
            <form method="POST" action="" enctype="multipart/form-data">
                <div style="height: 600px;" class="imgInput">
                  <input type="file" name="profile_image_path" class="btn btn-sm" accept="image/*" value="<?php echo $filename; ?>">
                </div><!--/.imgInput-->
            <?php if(isset($errors['profile_image_path']) && $errors['profile_image_path'] =='blank'){ ?>

                <div class="alert alert-danger">
                  画像を選択してください
                </div>
            <?php }elseif (isset($errors['profile_image_path']) && $errors['profile_image_path'] == 'extension') { ?>
            <div class="alert alert-danger">使用できる拡張子はjpgまたはpngまたはgifのみです。</div>
            <?php } ?>

            <!-- コメントの入力 -->
                <p>
                  <label>コメント</label><br>
                  <textarea cols="50" name="text" rows="5" ></textarea>
                    <?php if(isset($errors['text']) && $errors['text'] == 'blank'){ ?>
                      <div class="alert alert-danger">
                      コメントを入力してください
                      </div>
                    <?php } ?>
                </p>

                <!-- 場所の住所 -->
                <p>
                  <label>住所</label><br>
                  <textarea cols="50" name="address" rows="5" ></textarea>
                    <?php if(isset($errors['address']) && $errors['address'] == 'blank'){ ?>
                        <div class="alert alert-danger">
                          住所を入力してください
                        </div>
                    <?php } ?>

                </p>

                <!-- 評価点 -->
              <p style="margin: 0px;">評価: <span id="eva_tv">0.0</span> / 5.0</p>
              <input type="range" value="0" name="eva" style="width: 250px;" onchange="onEva_change(value)" oninput="onEva_in(value)">

              <!-- 投稿ボタン -->
              <input type="submit" name="確認画面へ" style="margin-top: 20px;">
              </form>
          </div>
        </div>
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
