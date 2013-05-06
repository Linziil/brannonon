<?php require_once 'lib/includes/functions.inc.php';
      require_once 'lib/includes/database.inc.php';
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
            <input class="search" type="text" name="search" placeholder="<?php category_name();?>" value="<?php search_value(); ?>"></input>
        </form>
        <div class="category_container">
            <ul>
                <?php //visiting category displays
                require_once 'lib/includes/categories.inc.php'?>
            </ul>
        </div>
    </header>
    <div class="sidebar">
        <div class="sidebar_title">
            <h4>Posts</h4>
        </div>
            <ul>
                <?php //if category is selected displays sidebar posts from selected category.
                      //else displays all sidebar posts
                if (!empty($get_category)) sidebar_posts($get_category, 'category');
                else all_sidebar_posts();
                ?>
            </ul>
    </div>
    <div class="content_container">
    <?php
        //if category is selected displays posts from selected category.
        //else displays all posts
        if (!empty($get_category)) category_posts($get_category);
        else all_posts();
        ?>
    </div>
    <div class="footer">
        <ul>
            <li><a href="home.php?page=<?php echo $current_page?>">1</a></li>
        </ul>
    </div>

</body>
</html>
