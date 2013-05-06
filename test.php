

    <?php 
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'my_db';

    query();

    function query(){
        
        $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'my_db';

        $mysqli = mysqli_connect($host, $username, $password, $database);
        $query = mysqli_query($mysqli, "INSERT INTO names (first_name, last_name) VALUES ('John', 'Doe')");
        
       if(!$query){
        echo "Database connection failed: " . mysqli_error($mysqli);
       }
       
       mysqli_close();
       }
      
    
    ?>