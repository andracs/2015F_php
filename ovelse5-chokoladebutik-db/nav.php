<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "choko";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$conn -> set_charset("UTF8"); 

echo "<!-- ";
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo " -->";
?>


 <nav>
   <?php
   $sql = "SELECT menu_id, menu_item, menu_href FROM t_menu";
   $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo '<a class="button" href="'.$row["menu_href"].'">' . $row["menu_item"] . '</a>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
   
   ?>
</nav>
   
   
