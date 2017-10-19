<?php
  $eTabName = 'detail_edit';
?>

<?php 
  session_start();
  require('parts/db_connect.php');

  // ログインチェック
if(!isset($_SESSION['login_user']['id'])){
    header('Location: lndex.php');
    exit();
}

// ここはログインしたユーザーが通る
// パラメータチェック
if(!isset($_GET['id'])){
  header('Location: mypage.php');
  exit();
}

  // 本人チェック (削除ツイートが自分のツイートかどうか)
  // ログインユーザーは$_SESSION['login_user']['id']を保持している
  // 削除するツイートのuser_idのカラムが==$_SESSION['login_user']['id']
  // であれば削除できる。というif文で対策する。
  // まずは、tweetsテーブルのid=$_GET['id']のレコードを入手する
  $sql = 'SELECT  `user_id`,`picture_path`,`address`,`text` FROM `seego_pictures` WHERE `id`=?';
  $data = array($_GET['id']);
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);

  // 1件のみなので、Whileでループさせず、一件目のみFetchする
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
  if($record['user_id']==$_SESSION['login_user']['id']){
      //編集できます
  } else {
     $content='他の人のツイートです。編集できません。';
     // 他の人のツイートを削除しようとしたらお帰り頂く
      header('Location: mypage.php?ng=on&content&id='.$content.$_SESSION['login_user']['id']);
      exit();
  }

  $sql='SELECT * FROM `seego_pictures` WHERE `id`=?';
  $data = array($_GET['id']);
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);
  // 選択したtweetsデータを1件取ってくる
  $record = $stmt->fetch(PDO::FETCH_ASSOC);


//バリデーション用のエラーチェック
$errors = array();
if(!empty($_POST)){
    //バリデーションチェック
    $address = $_POST['address'];
    $text = $_POST['text'];
    if($address&&$text == ''){
        $errors['address']['text']='blank';
        // $errors['text']='blank';
    }
    if(empty($errors)){
      echo 'つぶやき更新<br>';
      $sql = 'UPDATE `seego_pictures` SET `address`= ?,`text` = ? WHERE `id`=?';
      $data = array($address,$text,$_POST['id']);
      $stmt = $dbh->prepare($sql);
      $stmt->execute($data);

      // $_POSTデータの破棄（再送信を不可にする）
      header('Location: detail_edit.php?id='.$_POST['id']);
      exit();
    }
}


 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ツイート編集</title>
  <link rel="stylesheet" type="text/css" href="styles/style_detail_edit.css">
  <link rel="stylesheet" type="text/css" href="lib/boostrap/css/bootstrap.css">
</head>
<body>
  <?php
    include('parts/header.php');
  ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
        <div class="back-style">
          <h3>投稿編集</h3>
          <form method="POST" action="">
              <textarea name="address" rows="5" cols="50"><?php echo $record['address']; ?></textarea>
              <br>
              <textarea name="text" rows="5" cols="50"><?php echo $record['text']; ?></textarea>
              <br>
              <div style="color:black"><?php echo $record['created']; ?></div>
              <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
              <ul class="sns">
                <li><input type="submit" value="編集する" class="btn btn-primary"></li>
          </form>
                <li><a href="mypage.php?id=<?php echo $_SESSION['login_user']['id']; ?>" class="btn btn-warning">My Page</a></li>
              </ul>
        </div>
      </div>
    </div>
  </div>

  <?php
    include('parts/footer.php');
  ?>
</body>
</html>