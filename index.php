<?php session_start() ?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Social Share Button Generator | Badcode</title>
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/socio.css" />
        <?php include "./inc/head.php"; ?>
        
    </head>
    
    <body>
        <header style="margin: 0 auto;width:480px;">
            <nav style="text-align:left">
                <a href='./'>Home</a>
            </nav>
        </header>
        
        <hr />
        
        <div class="main" style="margin: 0 auto;width:480px;">
            
            <h3>Generate Social share buttons</h3>
            <p>Supports Twiiter, Facebook, Google Plus &amp; Linkedin. more comming soon..!</p>
            <form method="POST" style="text-align:left">
                Comment: <br /> <input type="text" name="comment" placeholder="<?php comment() ?>" /> <br /><br /> 
                URL: <br /> <input type="text" name="url" placeholder="<?php url() ?>" /> <br /><br />
                Hashtags: <br /> <input type="text" name="hashtags" placeholder="<?php hashtags() ?>" /><br /><br /> 
                <strong>More settings</strong><br>
                <input type="checkbox" name="roundShape" /><span class="checkmark">Round icons</span>
                <input type="checkbox" name="target"><span class="checkmark">Open in new window</span>
                <br /><br />
                <input type="submit" name="submit" />
            </form>
        
        <?php
        function comment() {
            if (!isset($_POST['comment'])) {
                echo "Say something..!";
            } else {
                echo $_POST['comment'];
            }
        }
        function url() {
            if (!isset($_POST['url'])) {
                echo "link goes here";
            } else {
                echo $_POST['url'];
            }
        }
        function hashtags() {
            if (!isset($_POST['hashtags'])) {
                echo "hashtag1,hashtag2";
            } else {
                echo $_POST['hashtags'];
            }
        }
    
        function ifsubmited() {
            if (!isset($_POST['comment']) || !isset($_POST['url']) || !isset($_POST['hashtags'])) {
                echo "<span style='color:#7289DA;'>waiting for submit..!</span>";
            } else {
                echo "<span style='color:green;'>Details have been submited..!</span> <br /> <a href='./'>Generate another code</a>";
            }
        }
                                   
        function shape() {
            if (!isset($_POST['roundShape'])) {
                echo "square";
            } else {
                 echo "circle";
            }
        }
                                   
        function target() {
            if (!isset($_POST['target'])) {
                echo "_self";
            } else {
                 echo "_blank";
            }
        } 
                                   
        ifsubmited();
        ?>
            <br /><br />
            
            <h5>Preview</h5>
            <?php include "inc/socio-buttons.php" ?>
            <br />
            <textarea style="width:320px;height:180px; text-align:left"><?php include "inc/socio-buttons.php" ?></textarea>
            
            <p>you can try on <a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_basic" target="_blank">W3 Editor</a></p>
        
  </div>
        
        <hr />
            <footer style="text-align:center;">
                <p class="copy-text">&copy; <?php echo date("Y"); ?> <a href="./">Badcodenana</a> All rights reserved</p>
            </footer>
</body>
</html>