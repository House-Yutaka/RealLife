<?php
  $eTabName = 'complete';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Thank You Friends!!</title>
</head>
<body>
  <?php
  include('parts/header.php');
  ?>
  <div class="wrapper">
      <!-- このdivたぐの中に書く -->
      <div class="container" align="center">
        <div class="row">
          <div style="  text-align: center; margin: 80px 0px; background: rgba(243, 201, 17, 0.3); border-radius: 30px; border: solid 2px #001a42; padding: 15px 0px; width: 50%; height: 50%;" align="center">
              <div>
                <h1>
                 Thank You Friends!!<br>
                 Let's Find Favorit Place!!<br>
                </h1>
              </div>
              <form method="POST" action="index.php">
              <input type="submit" class="btn btn-lg" value="SEEGO!">
              </form>
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




