<?php 

  // セッションを使うためのおまじない
  // データを一時的に保存する為にsession_start()関数を使用する
  

   if (!isset($_SESSION['seego_info'])) {
     //一度も入力せずに飛んだ人は登録画面へ飛ばす。
     header('Location: signup.php');
     exit();
   }
  session_start();

  
  // ユーザー登録ボタンが押されたら下記の処理を実行
  if (!empty($_POST)) {
        //データ登録確認
         // var_dump($_POST);
         echo 'POST送信しました';

      require('parts/db_connect.php');

      $address = $_SESSION['seego_info']['address'];
      $text = $_SESSION['seego_info']['text'];
      $picture_path = $_SESSION['seego_info']['profile_image_path'];

      // $_POSTの代わりに$_SESSIONがすべてのデータ（ユーザーが入力したデータ）を保持している
      // INSERT処理 （usersテーブルにデータを登録します）
      $sql = 'INSERT INTO `seego_pictures` SET `user_id`=?,`address`=?,`text`=?,`picture_path`=?,`created` =NOW()';
       // var_dump($_SESSION['seego_info']);

      $data = array($_SESSION['seego_info'],$user_id,$address,$text,$picture_path);
      $stmt = $dbh->prepare($sql);
      $stmt->execute($data);
      header('Location: mypage.php');
      exit();

  }

 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
 <meta charset="utf-8">
   <title></title>
 </head>
 <body>
  <div>
    下記の情報で登録してもよろしいでしょうか。
    <br>
      <img src="images/ex_view_images/<?php echo $_SESSION['seego_info']['profile_image_path'] ?>" width="350">
      <br>
      <div>住所:<?php echo $_SESSION['seego_info']['address'];?></div><br>
      コメント:<?php echo $_SESSION['seego_info']['text']; ?><br>
  </div>
  <div>
    <form method="POST" action="">
        <input type="hidden" name="action" value="submit">
        <input type="submit" value="投稿!!">
    </form>
  </div>

 </body>
 </html>