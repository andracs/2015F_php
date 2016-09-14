<?php
  header('Content-type: text/html; charset=utf-8'); 
  	
  // Database eksempel
  echo "<h1>Database eksempel</h1>";

  
  /*******************   Etablerer forbindelse  til DB **********************/
  $servername = "localhost";
  $username = "root";
  $password = "root"; // XAMPP skal bruge: $password = "";
  $database = "choko";

  // Opretter forbindelse til databasen
  $conn = new mysqli($servername, $username, $password, $database);
  $conn->set_charset("utf8"); // Vigtigt for ÆØÅ

  // Tjekker forbindelsen
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  echo "Connected successfully <br>";

  /*******************   Henter menuelementer fra DB **********************/
  echo "<h2>Menuen fra DB </h2>";

  $sql = "SELECT menu_id, menu_item, menu_href FROM t_menu"; // 
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
  
  /*******************   Lidt om konkatinering **********************/ 
  echo "<h2>Konkatinering </h2>";

  // Lidt om konkatinering (spurgt i klassen)
  
  $variable = "ost";
  $et_array = array ("underbolle", "overbolle", "smør");
  $skiver_af_agurker = 3;
  
  // Nu laver jeg min sandwich lag for lag, dvs. 14 linjers kode
  echo "<hr>";
  echo $et_array[0];
  echo " ";
  echo $et_array[2];
  echo " ";
  echo $variable;
  echo " ";
  echo "'syltetøj' "; // single quotes, double quotes
  echo  $skiver_af_agurker;
  echo " ";
  echo "agurker";
  echo " ";
  echo $et_array[1];
  echo "<hr>";
  
   // Nu konkatinerer jeg min sandwich, så den kodes med en enkelt linje (samme sandwich - en linje)
   echo "<hr>" . $et_array[0] . " " . $et_array[2] . " " . $variable . " " . "'syltetøj' " . $skiver_af_agurker . " "  . "agurker" . " " . $et_array[1]."<hr>";


?>
  
