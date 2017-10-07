<?php
  $eTabName = 'check.php';

  // セッションを使うためのおまじない
  // データを一時的に保存する為にsession_start()関数を使用する
  session_start();
        require('parts/db_connect.php');


   if (!isset($_SESSION['login_user'])) {
     //一度も入力せずに飛んだ人は登録画面へ飛ばす。
     header('Location: signup.php');
     exit();
   }

  
  // ユーザー登録ボタンが押されたら下記の処理を実行
  if (!empty($_POST)) {
        //データ登録確認
         //  var_dump($_POST);
         // echo 'POST送信しました';

      $users = $_SESSION['login_user'];
      $address = $_SESSION['login_user']['address'];
      $text = $_SESSION['login_user']['text'];
      $picture_path = $_SESSION['login_user']['profile_image_path'];

      // $_POSTの代わりに$_SESSIONがすべてのデータ（ユーザーが入力したデータ）を保持している
      // INSERT処理 （usersテーブルにデータを登録します）
      $sql = 'INSERT INTO `seego_pictures` SET `user_id`=?,`address`=?,`text`=?,`picture_path`=?,`created` =NOW()';
        // var_dump($_SESSION['login_user']);

      $data = array($_SESSION['login_user'],$user_id,$address,$text,$picture_path);
      $stmt = $dbh->prepare($sql);
      $stmt->execute($data);
      header('Location: mypage.php');
      exit();

  }
$dbh = null;


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
                  下記の情報で登録してもよろしいでしょうか。さん<br>
                    <img src="images/ex_view_images/<?php echo $_SESSION['login_user']['profile_image_path'] ?>" width="350"><br>
                    <span style="padding-top: 15px;">
                          <label>住所</label><br>
                            <?php echo $_SESSION['login_user']['address'];?><br>
                          <label>コメント</label><br>
                            <?php echo $_SESSION['login_user']['text']; ?><br>
                    </span>
                </div>
                  <div>
                    <form method="POST" action="">
                        <input type="hidden" name="action" value="submit">
                        <input type="submit" value="投稿!!">
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


