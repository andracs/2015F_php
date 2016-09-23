<!--
  
  ### Insert data fra HTML formularen i en MySQL database via PHP ###
  
  Denne kode indeholder øvelsen fra blok 5, interaktion, 3. semester
  
  Ting, som kan forbedres i koden (TODO):
  ** Lav en slet.php, der sletter en linje i databasen vha. DELETE kommando og $_GET id. Eksempel: http://www.w3schools.com/php/php_mysql_delete.asp
  ** Lav en update.php, der opdaterer en linje i databasen vha. UPDATE kommando og $_GET id. Eksempel: http://www.w3schools.com/php/php_mysql_update.asp
  ** Lav en vis_data.php, der viser alle linjer og felter fra databsen i en fin tabel, som stylet med CSS.
  
-->

<!-- Første del: en HTML formular --> 

<h1>Indtast en begivenhed</h1>

<form action="insert.php" method="GET">
  Navn: <input type="text" name="navn">
  Dato: <input type="date" name="dato">
  Pris: <input type="text" name="pris">
  <input type="submit" name="submit" value="Indsend">
</form>


<?php
/* Anden del: en HTML formular */

#DEBUG echo $_GET['navn'];
#DEBUG echo $_GET['dato'];
#DEBUG echo $_GET['pris'];
#DEBUG exit("");

/*   Vi følger disse tutorials: 
http://www.w3schools.com/php/php_mysql_intro.asp
http://www.w3schools.com/php/php_mysql_insert.asp 
http://www.w3schools.com/php/php_mysql_create_table.asp

*/

# Opretter forbindelse til DB
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "aolfdk";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  else { echo "Hurra, der er hul igennem til databasen.<br />";}

# Jeg måtte tilføje denne linje efter undervisningen, for at undgå notice beskeder, når der ikke var variabler i GET
if (isset($_GET['navn']) & isset($_GET['dato']) & isset($_GET['pris'])) {

	# Vi laver en SQL forespørgsel (SQL query) 
	# Vi har kopiret nedenstående query fra PhpMyAdmin, og bagefter erstattet det faste værdier med variabler

	# Vores oprindelige kopieret query var :
	# INSERT INTO `aolfdk`.`events` (`id`, `navn`, `dato`, `starttid`, `sted`, `beskrivelse`, `pris`, `kontakt-email`, `kontakt-telefon`) VALUES (NULL, 'Rasmsu Seebach koncert', '2016-09-30', '19:30:00', 'Kulturforsyningen', 'Det bliver en dejlig koncert', '199', 'acsandras@gmail.com', '22957076');

	# Vores nye query er
	$sql = "
	INSERT INTO `aolfdk`.`events` (`id`, `navn`, `dato`, `starttid`, `sted`, `beskrivelse`, `pris`, `kontakt-email`, `kontakt-telefon`) 
	VALUES (NULL, '" .  $_GET['navn'] . "', '".$_GET['dato']."', '11:00:00', 'asd', 'asd', '".$_GET['pris']."', 'sa', '23');";

	echo "<i>MIN SQL sætning ser nu sådan ud: </br>" . $sql . "</i>";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully. <br />";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
	}
}
else { echo "Der skrives ikke data i databasen lige nu, fordi jeg får ikke nok data fra GET. <br />";}

echo "<h2>Databasen indeholder</h2>";

# Vi viser data databasen
$sql = "SELECT * FROM `events`";

$result = $conn->query($sql); // Det svar, vi får på vores SQL forespørgsel er et array. Dette indlæses i variablen $result

# Vi looper igennem $result array
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Navn: " . $row["navn"]. " Pris:" . $row["pris"]. "<br>";
    }
} else {
    echo "0 results";
}


# Lukker forbindelsen
$conn->close();

?>