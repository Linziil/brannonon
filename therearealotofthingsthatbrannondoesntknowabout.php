<?php
require_once 'lib/includes/database.inc.php';
require_once 'lib/includes/functions.inc.php';
$search = $_GET['search'];
$from = $_POST['email'];
$message = $_POST['message'];

if(!empty($_POST['message'])) fail_mail($from=NULL, $message); //sends blog post email suggestion

?>

<!DOCTYPE html>
    
<html>
<head>
    <title>Brannon On Everything</title>
    <?php require_once 'lib/includes/head.inc.php'?>
</head>
<script>
    window.onload = function() {
      document.getElementById("email").focus();
    }
</script>
<body>
    <header>
        <h1>Brannon on</h1>
        <form method="get">
            <input class="search" type="text" name="search" placeholder="Everything" value="... oops"></input>
        </form>
        <div class="category_container">
            <ul>
                <?php require_once 'lib/includes/blankcategories.inc.php'; //gets categories with no visiting marker ?>
            </ul>
        </div>
    </header>
    <div class="search_fail_container">
        <p>Brannon doesnt know anything about <i style="font-style: italic; font-weight: 600;"><?php echo $search?></i>. <br><br>
           Tell him he should learn about <i style="font-style: italic; font-weight: 600;"><?php echo $search?></i>. He will probably write about it if you do.
        <div class="email">
            <div class="email_title">  
                <form method="post">
                    <input name='email' type='text' id="email" placeholder='youremail@example.com'>
                    <label for="email">*Optional</label>
                    <textarea name='message'>Hey Brannon!
I love your website so much! You are obviously an increadibly intelligent, talented and motivated individual. In fact, I like your website more than any other website I have ever been to! I even have it set as my home page.
                    
I also wanted suggest that you write about <?php echo $search?>.</textarea>
                    <input type='submit' value="Send Email">
                </form>   
            </div> 
        </div>
    </div>