<?php 
// セッションを使う場合はsession_start();を記述する
session_start();
require('db_connect.php');

// バリデーション処理のエラーチェック
$errors = array();

if (!empty($_POST)) {
    // バリデーション(入力のチェック)
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == '') {
        $errors['email'] = 'blank';
      }
      if ($password == '') {
        $errors['password'] = 'blank';
      }elseif (strlen($password) < 6) {
        $errors['password'] = 'length';
      }

    // ログイン処理を記述
    if(empty($errors)){
      // すべてのエラーがなければ実行
      $sql = 'SELECT * FROM `seego_users` WHERE `email` = ? AND `password` = ?';

      // hash化
      // sha1()関数、引数に入れた値を暗号化
      $data = array($email,sha1($password));
      $stmt = $dbh->prepare($sql);
      $stmt ->execute($data);
      // セレクト文を実行したかを取得する
      $record = $stmt->fetch(PDO::FETCH_ASSOC);
      var_dump($record);

    // ログインできれば
    if ($record != false){
    // データが一致しました。
    // 本人確認完了
      $_SESSION['login_user']=$record;

      header('Location: mypage.php');
      exit();
  } else {
    // ログインできなければ
    $errors['login'] = "NG";
  }

    }


}

 ?>
