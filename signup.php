<?php
  $eTabName = 'signup';
?>
<!DOCTYPE html>
<html>
<head>
  <title>会員登録</title>
<link rel="stylesheet" type="text/css" href="styles/style_signup.css">
</head>
<body>
  <?php
  include('parts/header.php');
  ?>
<?php 
// 各入力項目の設定、検証
    $username = '';
    $email = '';
    $password = '';
    $password2 = '';

if(!empty($_POST)){

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  
  $errors = array();

  // usernameの検証
  if ($username == '') {
    $errors['username'] = 'blank';
  }
  // emailの検証
  if ($email == '') {
    $errors['email'] = 'blank';
  }elseif (!preg_match("/[0-9a-z!#\$%\&'\*\+\/\=\?\^\|\-\{\}\.]+@[0-9a-z!#\$%\&'\*\+\/\=\?\^\|\-\{\}\.]+/" , $email) ) {
    $regist_error .= "正しいemailアドレスを入力してください。<br />";
  }
  // password検証
  if ($password == '') {
    $errors['password'] = 'blank';
  }elseif (strlen($password) < 6){
    //パスワードは６文字以上入力
      $errors['password'] = 'length';
  }
  //password2をpasswordの合致確認
   if($password!=$password2){
        $errors['password2'] = 'notSame';
    }

  if (empty($errors)) {

    $_SESSION['user_info']['username'] = $username;
    $_SESSION['user_info']['email'] = $email;
    $_SESSION['user_info']['password'] = $password;

    //check.phpに飛ぶ
    header('Location: check.php');
    exit();
  }
}

 ?>

  <!-- 枠組みの作成 -->
  <div class="wrapper">
      <!-- このdivたぐの中に書く -->
    <div class="container">
      <div class="change">
        <div class="row">
          <div clss=".col-lg-12">
            <form method="POST" action="">
              <h1>User情報入力</h1>
  
            <!-- 　　ニックネーム入力　　 -->
                <label style="margin-top: 10px;">Nickname</label><br>
                  <input type="text" name="username" placeholder="例 :旅人太郎" class="text" value="<?php echo $username; ?>"><br>
                      <?php if(isset($errors["username"])) { ?>
                          <div class="alert alert-danger">
                            Nicknameを入力してください
                          </div>
                      <?php } ?>

                      <!-- メールアドレス入力 -->
                    <label>Email</label><br>
                      <input type="email" name="email" placeholder="例 :tbibito@world.jp" class="text" value="<?php echo $email; ?>"><br>
                          <?php if(isset($errors["email"])) { ?>
                            <div class="alert alert-danger">
                              Emailを入力してください
                            </div>
                          <?php } ?>

                          <!-- パスワード入力 -->
                        <label>Password</label><br>
                          <input type="password" name="password" maxlength="8" class="text"><br>
                              <?php if(isset($errors["password"]) && $errors['password'] == 'blank') { ?>
                                <div class="alert alert-danger">
                                  Passwordを入力してください
                                </div>
                              <?php }elseif (isset($errors['password']) && $errors['password'] == 'length'){ ?>
                                  <div class="alert alert-danger">パスワードは6文字以上を入れてください</div>
                              <?php } ?>

                              <!-- パスワード再入力 -->
                            <label>Retype Password</label><br>
                          <input type="password" name="password2" maxlength="8" class="text"><br>
                          <?php if (isset($errors['password2']) && $errors['password2'] == 'notSame'){ ?>
                                  <div class="alert alert-danger">パスワードが一致しません</div>
                          <?php } ?>


          </div>
                <div style="text-align: center; margin-top: 20px;">
                  <a href="check.php"><input type="submit" value="確認画面へ"></a>  
                  <button type="reset">リセット</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="push"></div>
  </div>
    <div>
      <?php include('parts/footer.php'); ?>
    </div>
</body>
</html>