<?php

$get_category = $_GET['category'];
$visiting = 'border-bottom: solid black 5px;';

if(empty($get_category)){
    echo "<li><a href='home.php' style='$visiting'>Everything</a></li>";
    echo "<li><a href='home.php?category=arts'>Arts</a></li>";
    echo "<li><a href='home.php?category=technology'>Technology</a></li>";
    echo "<li><a href='home.php?category=culture'>Culture</a></li>";
    echo "<li><a href='home.php?category=entertainment'>Entertainment</a></li>";
    echo "<li><a href='home.php?category=sports'>Sports</a></li>";
    echo "<li><a href='home.php?category=misc'>Misc.</a></li>";
}

elseif($get_category == 'arts'){
    echo "<li><a href='home.php'>Everything</a></li>";
    echo "<li><a href='home.php?category=arts' style='$visiting'>Arts</a></li>";
    echo "<li><a href='home.php?category=technology'>Technology</a></li>";
    echo "<li><a href='home.php?category=culture'>Culture</a></li>";
    echo "<li><a href='home.php?category=entertainment'>Entertainment</a></li>";
    echo "<li><a href='home.php?category=sports'>Sports</a></li>";
    echo "<li><a href='home.php?category=misc'>Misc.</a></li>";
}

elseif($get_category == 'technology'){
    echo "<li><a href='home.php'>Everything</a></li>";
    echo "<li><a href='home.php?category=arts'>Arts</a></li>";
    echo "<li><a href='home.php?category=technology' style='$visiting'>Technology</a></li>";
    echo "<li><a href='home.php?category=culture'>Culture</a></li>";
    echo "<li><a href='home.php?category=entertainment'>Entertainment</a></li>";
    echo "<li><a href='home.php?category=sports'>Sports</a></li>";
    echo "<li><a href='home.php?category=misc'>Misc.</a></li>";
}

elseif($get_category == 'culture'){
    echo "<li><a href='home.php'>Everything</a></li>";
    echo "<li><a href='home.php?category=arts'>Arts</a></li>";
    echo "<li><a href='home.php?category=technology'>Technology</a></li>";
    echo "<li><a href='home.php?category=culture' style='$visiting'>Culture</a></li>";
    echo "<li><a href='home.php?category=entertainment'>Entertainment</a></li>";
    echo "<li><a href='home.php?category=sports'>Sports</a></li>";
    echo "<li><a href='home.php?category=misc'>Misc.</a></li>";
}

elseif($get_category == 'entertainment'){
    echo "<li><a href='home.php'>Everything</a></li>";
    echo "<li><a href='home.php?category=arts'>Arts</a></li>";
    echo "<li><a href='home.php?category=technology'>Technology</a></li>";
    echo "<li><a href='home.php?category=culture'>Culture</a></li>";
    echo "<li><a href='home.php?category=entertainment' style='$visiting'>Entertainment</a></li>";
    echo "<li><a href='home.php?category=sports'>Sports</a></li>";
    echo "<li><a href='home.php?category=misc'>Misc.</a></li>";
}

elseif($get_category == 'sports'){
    echo "<li><a href='home.php'>Everything</a></li>";
    echo "<li><a href='home.php?category=arts'>Arts</a></li>";
    echo "<li><a href='home.php?category=technology'>Technology</a></li>";
    echo "<li><a href='home.php?category=culture'>Culture</a></li>";
    echo "<li><a href='home.php?category=entertainment'>Entertainment</a></li>";
    echo "<li><a href='home.php?category=sports' style='$visiting'>Sports</a></li>";
    echo "<li><a href='home.php?category=misc'>Misc.</a></li>";
}

elseif($get_category == 'misc'){
    echo "<li><a href='home.php?'>Everything</a></li>";
    echo "<li><a href='home.php?category=arts'>Arts</a></li>";
    echo "<li><a href='home.php?category=technology'>Technology</a></li>";
    echo "<li><a href='home.php?category=culture'>Culture</a></li>";
    echo "<li><a href='home.php?category=entertainment'>Entertainment</a></li>";
    echo "<li><a href='home.php?category=sports'>Sports</a></li>";
    echo "<li><a href='home.php?category=misc' style='$visiting'>Misc.</a></li>";
}

else{
    echo "<li><a href='home.php'>Everything</a></li>";
    echo "<li><a href='home.php?category=arts'>Arts</a></li>";
    echo "<li><a href='home.php?category=technology'>Technology</a></li>";
    echo "<li><a href='home.php?category=culture'>Culture</a></li>";
    echo "<li><a href='home.php?category=entertainment'>Entertainment</a></li>";
    echo "<li><a href='home.php?category=sports'>Sports</a></li>";
    echo "<li><a href='home.php?category=misc'>Misc.</a></li>"; 
}
?>