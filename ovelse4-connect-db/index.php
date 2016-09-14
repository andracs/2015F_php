
<?php

  // Database eksempel
  echo "<h1>Database eksempel</h1>";
  
  /*******************   Etablerer forbindelse  til DB **********************/
  $servername = "localhost";
  $username = "root";
  $password = "root"; // XAMPP skal bruge: $password = "";
  $database = "choko";

  // Opretter forbindelse til databasen
  $conn = new mysqli($servername, $username, $password, $database);

  // Tjekker forbindelsen
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  echo "Connected successfully <br>";

  /*******************   Henter menuelementer fra DB **********************/

  $sql = "SELECT menu_id, menu_item, menu_href FROM t_menu";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "Id: " . $row["menu_id"]. " - Menu titel: " . $row["menu_item"]. " Menu link: " . $row["menu_href"]. "<br>";
        echo $row["menu_item"];
        echo " ";
    }
} else {
    echo "0 results";
}


  /*******************   Lukker forbindelse  til DB **********************/ 
  $conn->close();

?>
  
