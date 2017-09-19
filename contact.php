<?php
    $eTabName = '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="styles/style_contact.css">
</head>
<body> 
        <header>
            <div class="header">
                <?php include("parts/header.php"); ?> 
            </div>
        </header>
        <div class="container" style="">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8">
                    <div class="back-style">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="logo">
                                    <h1>お問い合わせ</h1>
                                </div>
                                <div class="form">
                                    <label>Name</label><br>                        
                                    <input class="form-control" type="text" name="nickname" required style="width: 300px; border: solid 2px #001a42 ">
                                    <label>Mail Address</label><br>                        
                                    <input class="form-control" type="email" name="email" required style="width: 300px; border: solid 2px #001a42 "> 
                                    <label>Content</label><br>                       
                                    <textarea class="form-control" name="content" rows="10" required style="width: 300px; border: solid 2px #001a42 "></textarea>                    
                
                                          
                                    <button type="subimit" class="btn btn-lg">送信</button>  
                                </div>
                            </div>
                        </div> 
                        <!-- back-style (row) -->
                    </div>
                    <!-- back-style -->
                </div>
                <div class="col-lg-offset-2"></div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <footer>
            <?php   include("parts/footer.php"); ?>
        </footer>
    </body>
</html>  