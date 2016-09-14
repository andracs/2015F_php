<?php 

// Yes, min fejl rapportering virker:
// trigger_error("Øv-fejl", E_USER_ERROR);

// Min første funktion
function hello() {
  echo "Hello function!<br>";
}

hello();
hello();
hello();

// Jeg deklarer anden funktion
function hello_navn($navn) {
  echo "Hello $navn!<br>";
}

// Jeg kalder min funktion 3 gange
hello_navn('Pernille');
hello_navn('Lonnie');
hello_navn('Michella');

// Nu kommer "Charlie bit me" - øvelsen

/* Pseudokode */

// Valg et af 2 tal: 1 eller 0 
$randombite = rand(1, 2);
echo "Randomtallet er $randombite.<br>";
// Hvis tallet er 1, så udskriv "Charlie bit me!"
if ($randombite==1) {echo "Charlie bit me!<br>";} 
// Ellers udskriv "Charlie did not bite me!"
else  {echo "Charlie did not bite me!<br>";} 


/* Nu som funktion */
function charlie() {
  $randombite = rand(1, 2);
  if ($randombite==1) {echo "Charlie bit me!<br>";} 
  else  {echo "Charlie did not bite me!<br>";} 
}

charlie();
charlie();
charlie();
charlie();
charlie();

/* EXTREME PROGRAMMING: Opgaven lodtrækning / LOTTO
(a) træk et tal mellem 1-5 og skriv VUNDET hvis tallet er 5

(b) LOTTO: valg selv 7 tal, genererer 7 tal mellem 1..35, 
og vis, hvor mange rigtige du havde

*/

// András løsningsforslag LOTTO
// 1) Laver et array med de 7 valgte tal
// 2) Laver 7 variabler med 7 tilfældige tal (eller array)
// 3) Bruger in_array() funktion 7 gange, for at se, om det 
//    valgte tal er iblandt de udtrukne
// 4) Hver gange, der er match, skriver "Du har gættet X rigtigt!" 

echo "<hr>"; // Viser en linje med HR tag

$mine_valgte_tal = array(3, 6, 12, 24, 15, 33, 21); // Laver et array med mine lottotal

$udtrukne_vindertal = array(); // Laver et tømt array

// Se mere på http://www.w3schools.com/php/func_array_count.asp
while (count($udtrukne_vindertal)<7) { // Finder på nye vindertal, og undgår at samme tal trækkes flere gange
      
      $nyt_tal = rand(1,35);
      
      if (!in_array($nyt_tal, $udtrukne_vindertal)) { // Se mere påhttp://www.w3schools.com/php/func_array_in_array.asp
      
        $udtrukne_vindertal[]=$nyt_tal; // Tilføjer det udtrukne tal som sidste element i arrayet
      
      }
  }

print_r($udtrukne_vindertal); // Bruges til DEBUG: Viser arrayet med de udtrukne tal 

echo "<hr>"; // Viser en linje med HR tag

$antal_rigtige = 0;

foreach ($udtrukne_vindertal as &$value) { // Tjekker, hvor mange rigtige er der
  
  if (in_array($value,$mine_valgte_tal)) {
  
    echo "<strong>$value er et vinderal. </strong><br>";
  
    $antal_rigtige++;
  
  } else { echo "$value er ikke et vinderal. <br>"; }

}

echo "<hr>";

echo "Du har fået " . $antal_rigtige . " rigtige.<br>";

$gevinster = array (0, 0, 50, 200, 2000, 50000, 200000);

echo "<i>";

if ($gevinster[$antal_rigtige]) {
  echo "Vinderprognose: med " . $antal_rigtige . " rigtige vil du få ca. 
$gevinster[$antal_rigtige] kroner udbetalt. "; 
}

echo "</i>";







?>