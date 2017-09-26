<?php
	$eTabName = 'timeline';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/style_timeline.css">
<script type="text/javascript" src="scripts/prototype.js"></script>
	<title>SEEGO</title>
</head>
<body>
	<?php
	include('parts/header.php');
	?>
	<div class="wrapper">
			<!-- このdivたぐの中に書く -->

   
<div class="main">
    <div class="chat col-lg-12 col-md-12 col-xs-12">
        <div class="chat-header">
            <img class="img-header" src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-32.png" alt="avatar" />

            <div class="chat-with">Yutaka Sanchi</div>

            <form action="timeline.php" method="POST">
                <textarea name="content" placeholder="Type your message..." rows="3"></textarea>
                <button class="send_button">Send</button>
            </form>

                <?php 
                  if(!empty($_POST)) {
                      $dsn = 'mysql:dbname=PHPkiso;host=localhost';
                      $user = 'root';
                      $password = '';
                      $dbh = new PDO($dsn, $user, $password);
                      $dbh -> query('SET NAMES utf8');

                      $content = htmlspecialchars($_POST['content']);

                      $sql = 'INSERT INTO `timeline` SET `content`=?';

                      $data = array($content);

                      $stmt = $dbh->prepare($sql);
                      $stmt->execute($data);
                  }
               ?>
        </div> <!-- chat-header -->


        <div class="chat-history">

            <?php 
                $_POST['content']=null;

                $dsn = 'mysql:dbname=PHPkiso;host=localhost';
                $user = 'root';
                $password = '';
                $dbh = new PDO($dsn, $user, $password);
                $dbh -> query('SET NAMES utf8');  

                $sql = 'SELECT * FROM `timeline` ORDER BY created_at DESC LIMIT 6';

                $data=array($_POST['content']);
                $stmt = $dbh->prepare($sql);
                $stmt->execute($data);

                $data = array();
                while(true){
                  $record = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($record == false){
                      break;
                    }
                  $data[]=$record;
                }
           
              for($i=0;$i<=5;$i++){ ?>
                <div class="chat-message">

                <img class="icon" src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-32.png" alt="avatar" />

                <div class="chat-message-content">
                    <span class="chat-time"><?php echo $data[$i]['created_at']; ?></span>
                    <h5>Yutaka Sanchi</h5>
                    <p> <?php echo $data[$i]['content']; ?> </p> 
                    <div class="options">
                    <a href=""><img src="images/bad.png"></a>
                    <a href=""><img src="images/good.png"></a>
                    <a href=""><img src="images/reply.png"></a>
                    </div>
                </div>
               </div> <!-- chat-message -->
              <hr>
              <?php }
               $dbh = null; ?>

        </div> <!-- chat-history -->


    </div> <!-- chat -->
</div> <!-- main -->



		<div class="push"></div>
	</div>

	<?php
	include('parts/footer.php');
	?>
</body>
</html>
