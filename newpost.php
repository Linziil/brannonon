<head>
    <title>Manage</title>
    <script type="text/javascript" src="//use.typekit.net/duw2pgr.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="jquery-1.8.2.min.js">//jquery</script>
    <script src="javascript.js">//javascript include</script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .entry_header{
            height: 40px;
        }
        
        .entry:hover{
            margin-left: 0px;
        }
        
        label{
            width: 250px;
            float: right;
            padding-top: 20px;
            font-family: "adelle";
            font-size: 20px;
        }
        
        select{
            width: 200px;
            background-color: black;
            color: white;
            font-size: 1.2em;
            float: right;
            margin-top: 10px;
            display: block;
        }
        
        input[type="submit"]{
            float: right;
            width: 200px;
            margin-right: 20px;
            margin-top: 20px;
            font-family: "adelle";
            font-size: 24px;
            font-weight: 300;
            background-color: black;
            color: white;
            outline: none;
            border: none;
            cursor: pointer;
        }
        
        input[type="submit"]:hover{
            background-color: gold;
            color: black;
        }
        
    </style>
</head>
<?php
require_once 'lib/includes/functions.inc.php';
require_once 'lib/includes/database.inc.php';

if(!empty($_POST['post_name']) &&
   !empty($_POST['post_date']) &&
   !empty($_POST['post_content']) &&
   !empty($_POST['notes']) &&
   !empty($_POST['category']) &&
   !empty($_POST['tags']) &&
   !empty($_POST['post_display'])){
    
    insert_posts(sanitize($_POST['post_name']),
                 sanitize($_POST['post_date']),
                 sanitize($_POST['post_content']),
                 sanitize($_POST['notes']),
                 sanitize($_POST['category']),
                 strtolower(sanitize($_POST['tags'])),
                 sanitize($_POST['post_display']));
}
else echo 'something is empty';

if(!empty($_POST['delete'])){
    delete_posts(sanitize($_POST['delete']));
}
else echo 'nothing deleted';
?>
<html>

<body>
   <form method="post" class="new_post">
   <header>
    <h1 style="width: 100%;">Welcome Brannon!</h1>
        <div class="category_container">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="newpost.php" style="border-bottom: solid black 5px";>New Post</a></li>
                <li><a href="deletepost.php">Delete Post</a></li>
            </ul>
        </div>
    </header>
    <div class="sidebar" style="padding-bottom: 0px;">
        <div class="sidebar_title">
            <h4>Notes</h4>
        </div>
        <textarea rows="15" cols="15" name="notes" Placeholder="seperate by ^."></textarea>
        
    </div>
    <div class="content_container">
        <!-- // delete code below
            <form method="post" class="delete_post">
            <label for="delete">Delete</label>
            <input type="text" name="delete" id="delete" placeholder="Delete title">
            <input type="submit" value="delete">
        </form>-->
        <div class="entry">
            <div class='entry_header'>
                <input type="text" name="post_name" placeholder="Title">
                <input type="text" name="post_date" placeholder="MM/DD/YYYY">
            </div>  
            <textarea rows="30" cols="45" name="post_content" Placeholder="Write dat nice ass post right here."></textarea>
            <textarea rows="15" cols="45" name="post_display" Placeholder="Write what you want to preview here."></textarea>
        </div>
    </div>
    <label for="tags">Tags:</label>
    <textarea rows="15" cols="15" name="tags" Placeholder="seperated by commas" style="width: 252px; height: 100px; float: right;"></textarea>
    <select name="category">
        <option value="arts">Arts</option>
        <option value="technology">Technology</option>
        <option value="culture">Culture</option>
        <option value="entertainment">Entertainment</option>
        <option value="sports">Sports</option>
        <option value="misc">Misc</option
    </select> 
    <input type="submit" value="Post">
    </form>
    </div>
</body>
</html>