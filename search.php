<?php
require_once 'lib/includes/database.inc.php';
require_once 'lib/includes/functions.inc.php';
$search = $_GET['search'];
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
            <input class="search" type="text" name="search" placeholder="Everything" value="<?php echo $search; //displays name of search specifier while on search page?>"></input>
        </form>
        <div class="category_container">
            <ul>
                 <?php require_once 'lib/includes/blankcategories.inc.php' //gets categories with no visiting marker?>
            </ul>
        </div>
    </header>
    
    <?php if_exists($search); //redirects if search fails?>
    <div class="sidebar">
        <div class="sidebar_title">
            <h4>Posts</h4>
        </div>
            <ul>
                <?php //displays sidebar posts from search specifier
                sidebar_posts_by_search($search); ?>
            </ul>
    </div>
    <div class="content_container">
    <?php //displays posts from search specifier
    posts_by_search($search); ?>
    </div>
    

</body>
</html>
