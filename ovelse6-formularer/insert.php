<h1>Indtast en begivenhed</h1>
<form action="insert.php" method="GET">
  Navn: <input type="text" name="navn">
  Dato: <input type="date" name="dato">
  Pris: <input type="text" name="pris">
  <input type="submit" name="submit" value="Indsend">
</form>


<?php


#DEBUG echo $_GET['navn'];
#DEBUG echo $_GET['dato'];
#DEBUG echo $_GET['pris'];
#DEBUG exit("");

/*  
Vi følger disse tutorials: 
http://www.w3schools.com/php/php_mysql_insert.asp 
*/

# Oprette forbindelse til DB
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "aolfdk";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  else { echo "Hurra, der er hul igennem til databasen.<br />";}

# Lave et insert query / kopieret fra PHPMyAdmin
$sql = "
INSERT INTO `aolfdk`.`events` (`id`, `navn`, `dato`, `starttid`, `sted`, `beskrivelse`, `pris`, `kontakt-email`, `kontakt-telefon`) 
VALUES (NULL, '" .  $_GET['navn'] . "', '".$_GET['dato']."', '11:00:00', 'asd', 'asd', '".$_GET['pris']."', 'sa', '23');";

echo "MIN SQL sætning ser nu spdan ud: </br>" . $sql;


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

# Viser data databasen
$sql = "SELECT * FROM `events`";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Navn: " . $row["navn"]. " Pris:" . $row["pris"]. "<br>";
    }
} else {
    echo "0 results";
}


# Lukke forbindelse
$conn->close();

?>