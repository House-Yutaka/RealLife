<?php 

if(empty($_SESSION['login_user'])){
  $_SESSION['login_user'] = "";
  $_SESSION['email'] = "";
}

if ($_POST) {
include('db_connect.php');
$regist_error = "";
$errors = array();

if (!empty($_POST)) {
    // バリデーション(入力のチェック)
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == '') {
        $errors['email'] = 'blank';
      }elseif (!preg_match("/[0-9a-z!#\$%\&'\*\+\/\=\?\^\|\-\{\}\.]+@[0-9a-z!#\$%\&'\*\+\/\=\?\^\|\-\{\}\.]+/" , $email) ) {
    $regist_error .= "emailが違います<br />";
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
      //var_dump($record);

    // ログインできれば
    if ($record != false){
    // データが一致しました。
    // 本人確認完了
      $_SESSION['login_user']=$record;
      $_SESSION['email'] = $email;
      //header('Location: mypage.php');
  } else {
    // ログインできなければ
    $errors['login'] = "NG";
  }

    }


}
}
 ?>
