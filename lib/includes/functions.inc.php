<?php
//backend to submit blog posts to the website
function insert_posts($post_name, $post_date, $post_content, $notes, $category, $tags, $post_display){
    $variable_name =strtolower(str_replace(" ", "", $post_name));
    global $mysqli;
    $query = mysqli_query($mysqli, "INSERT INTO blog_posts (post_name, post_date, post_content, notes, category, tags, post_display, variable_name) VALUES ('$post_name', '$post_date', '$post_content', '$notes', '$category', '$tags', '$post_display', '$variable_name')");
    mysqli_close();
}

//backend to delete blog post by entering searching post_name;
function delete_posts($delete_post_name){
    $variable_name =strtolower(str_replace(" ", "", $delete_post_name));
    echo $variable_name;
    global $mysqli;
    $query = mysqli_query($mysqli, "DELETE FROM blog_posts WHERE variable_name='$variable_name'");
    mysqli_close();
}

//gets selected blog post. Called from inside the posts.php webpage.
function get_post($post){
    global $mysqli;
    $query = mysqli_query($mysqli, "SELECT post_name, post_date, post_content FROM blog_posts WHERE variable_name='$post'");
    $results = mysqli_fetch_assoc($query);

    $post_name = $results['post_name'];
    $post_date = $results['post_date'];
    $post_content = $results['post_content'];
    
        echo    "<div class='post'>";
        echo        "<div class='entry_header'>";
        echo       "<h2>{$post_name}</h2>";
        echo        "<h3>{$post_date}</h3>";
        echo       "</div>";
        echo       "<p>{$post_content}</p>";
        echo    "</div>";
}

//gets and displays all blog posts of a certain category
function category_posts($get_category){
    global $mysqli;
    $query = mysqli_query($mysqli, "SELECT variable_name, post_name, post_date, post_display FROM blog_posts WHERE category= '$get_category' ORDER BY id DESC LIMIT 5");
   
    $id=0;
    while($results = mysqli_fetch_assoc($query)){
    
    $post_name = $results['post_name'];
    $post_date = $results['post_date'];
    $post_display = $results['post_display'];
    $variable_name = $results['variable_name'];
     
        echo    "<div class='entry' onclick='window.location=\"posts.php?post=$variable_name\"'>";
        echo        "<div class='entry_header'>";
        echo       "<h2>{$post_name}</h2>";
        echo        "<h3>{$post_date}</h3>";
        echo       "</div>";
        echo       "<p>{$post_display}</p>";
        echo    "</div>";
    }
    
    mysqli_close();
}

//gets and displays all posts on homepage d
function all_posts(){
    global $mysqli;
    $query = mysqli_query($mysqli, "SELECT variable_name, post_name, post_date, post_display FROM blog_posts ORDER BY id DESC LIMIT 5");
    
    while($results = mysqli_fetch_assoc($query)){
    
    $post_name = $results['post_name'];
    $post_date = $results['post_date'];
    $post_display = $results['post_display'];
    $variable_name = $results['variable_name'];
    
        echo    "<div class='entry' onclick='window.location=\"posts.php?post=$variable_name\"'>";
        echo        "<div class='entry_header'>";
        echo       "<h2>{$post_name}</h2>";
        echo        "<h3>{$post_date}</h3>";
        echo       "</div>";
        echo       "<p>{$post_display}</p>";
        echo    "</div>";
        
    }


}

//gets and displays all sidebar posts on homepage 
function all_sidebar_posts(){
    
    global $mysqli;
    $query = mysqli_query($mysqli, "SELECT variable_name, post_name FROM blog_posts ORDER BY id DESC LIMIT 5");

    while($results = mysqli_fetch_assoc($query)){
    
    $post_name = $results['post_name'];
    $variable_name = $results['variable_name'];
    echo  "<li><a href='posts.php?post=$variable_name'>$post_name</a></li>"; 
    }
    mysqli_data_seek(mysqli_fetch_assoc($query), 0);
 
}

//gets and displays sidebar posts from categories on home page
function sidebar_posts($specifier, $column){
    
    global $mysqli;
    $query = mysqli_query($mysqli, "SELECT variable_name, post_name FROM blog_posts WHERE $column='$specifier' ORDER BY id DESC");

    while($results = mysqli_fetch_assoc($query)){
    
    $post_name = $results['post_name'];
    $variable_name = $results['variable_name'];
    echo  "<li><a href='posts.php?post=$variable_name'>$post_name</a></li>"; 
    }
    mysqli_data_seek(mysqli_fetch_assoc($query), 0);
 
}

//gets and displays all sidebar posts from a search on search page 
function sidebar_posts_by_search($specifier){
    
    global $mysqli;
    $query = mysqli_query($mysqli, "SELECT variable_name, post_name FROM blog_posts WHERE tags LIKE '%$specifier%' ORDER BY id DESC");

    while($results = mysqli_fetch_assoc($query)){
    
    $post_name = $results['post_name'];
    $variable_name = $results['variable_name'];
    echo  "<li><a href='posts.php?post=$variable_name'>$post_name</a></li>"; 
    }
    mysqli_data_seek(mysqli_fetch_assoc($query), 0);
 
}

//gets and displays all posts from a search on search page
function posts_by_search($specifier){
    global $mysqli;
    $query = mysqli_query($mysqli, "SELECT variable_name, post_name, post_date, post_display FROM blog_posts WHERE tags LIKE '%$specifier%' ORDER BY id DESC");
   
    
    while($results = mysqli_fetch_assoc($query)){
    
    $post_name = $results['post_name'];
    $post_date = $results['post_date'];
    $post_display = $results['post_display'];
    $variable_name = $results['variable_name'];
    
        echo    "<div class='entry' onclick='window.location=\"posts.php?post=$variable_name\"'>";
        echo        "<div class='entry_header'>";
        echo       "<h2>{$post_name}</h2>";
        echo        "<h3>{$post_date}</h3>";
        echo       "</div>";
        echo       "<p>{$post_display}</p>";
        echo    "</div>";
        
    }
    
    mysqli_close();
}

//gets and displays notes from post on posts page
function get_notes($post){
    
    global $mysqli;
    $query = mysqli_query($mysqli, "SELECT notes FROM blog_posts WHERE variable_name='$post'");
    $row = mysqli_fetch_row($query);
    $results = explode('^', $row[0]);
    
    $i = 0;
    $number = count($results);
    while($i<=$number-1){
        echo "<p>$results[$i]</p>";
        $i++;
    } 
}

//redirects to search page on home page if search is submitted
function search_value(){
    $search = $_GET['search'];
    if(!empty($search)){
        header("Location: search.php?search=$search");
    }
    else {
        return null;
    }
}

//gets and displays current visiting category name as placeholder text in searchbar on home page
function category_name(){
    if(!empty($_GET['category'])){
        echo ucfirst($_GET['category']);
    }
    
    else echo 'Everything';
}

//if search fails redirects
function if_exists($search){
     global $mysqli;
     $query = mysqli_query($mysqli, "SELECT variable_name, post_name, post_date, post_display FROM blog_posts WHERE tags LIKE '%$search%' ORDER BY id DESC");
     $num_rows = mysqli_num_rows($query);

     if($num_rows == 0){
        header("location: therearealotofthingsthatbrannondoesntknowabout.php?search=$search");
     }  
}

//sends post recommendation email
function fail_mail($from, $message){
    $to = "brannon@brannondorsey.com";
    $subject = "Post suggestion";
    
    if($from == NULL) $headers = "From: Anonymous";
    else $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);
}

//turns quotes to hex codes in $_POST and $_GET && bracket codes to anchor tags
 function sanitize($input){

    $double = str_replace( '"', '&#34', $input);
    $single = str_replace("'", "&#39", $double);
    $bracket_erase = str_replace('[', "", $single);
    $link_open = str_replace('{', '<a href="', $bracket_erase);
    $link_close = str_replace("}", '">', $link_open);
    $link_value = str_replace(']', "</a>", $link_close);

 return $link_value;
 }
 
 
?>