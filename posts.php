<?php
require_once 'lib/includes/database.inc.php';
require_once 'lib/includes/functions.inc.php';
$post = $_GET['post'];
?>

<!DOCTYPE html>
    
<html>
<head>
    <title>Brannon On Everything</title>
    <?php require_once 'lib/includes/head.inc.php'?>
</head>

<body>
    <header>
        <h1>Brannon on</h1>
        <form method="get">
            <input class="search" type="text" name="search" placeholder="this specific thing" value="<?php search_value(); ?>"></input>
        </form>
        <div class="category_container">
            <ul>
                <?php require_once 'lib/includes/blankcategories.inc.php'; //gets categories with no visiting marker ?>
            </ul>
        </div>
    </header>
    <div class="sidebar" style="padding-bottom: 0px;">
        <div class="sidebar_title">
            <h4>Notes</h4>
        </div>
                <?php get_notes($post); ?>
    </div>
    <div class="content_container">
    <?php get_post($post); ?>
    </div>
    

</body>
</html>
