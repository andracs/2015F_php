<?php

  // Database eksempel
  echo "<h1>Database eksempel</h1>";
  
  /*******************   Etablerer forbindelse  til DB **********************/
  $servername = "localhost";
  $username = "root";
  $password = "root"; // XAMPP skal bruge: $password = "";
  $database = "choko";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  echo "Connected successfully";

  /*******************   Henter menuelementer fra DB **********************/



  /*******************   Lukker forbindelse  til DB **********************/ 
  $conn->close();

?>
  
