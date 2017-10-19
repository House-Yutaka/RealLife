<?php

  session_start();
  require('parts/db_connect.php');

if(!isset($_SESSION['login_user']['id'])){
    header('Location: login.php');
    exit();
}

  if(!isset($_GET['id'])){
    header('Location: mypage.php');
    exit();
  }

  $sql = 'SELECT  `user_id`,`picture_path`,`address`,`text` FROM `seego_pictures` WHERE `id`=?';
  $data = array($_GET['id']);
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);

  $record = $stmt->fetch(PDO::FETCH_ASSOC);
  if($record['user_id']==$_SESSION['login_user']['id']){
      echo '削除可能！';
        $sql = 'DELETE FROM `seego_pictures` WHERE `id`=?';
        $data = array($_GET['id']);
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);


  } else {
     echo '他の人のツイートです。削除できません。';
     header('Location: mypage.php?ng=on&content&id='.$content.$_SESSION['login_user']['id']);
     exit();


  }

  // echo "id".$_GET['id']."<br>";
  // echo "user_id".$_SESSION['login_user']['id'];
  // exit();
  // 削除処理記載

  $content=$record['picture_path']['address']['text'];
  
  header('Location: mypage.php?delete=on&content&id='.$content.$_SESSION['login_user']['id']);
  exit();

?>
