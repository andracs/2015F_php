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
// 1) Lav et array med de 7 valgte tal
// 2) Lav 7 variabler med 7 tilfældige tal
// 3) brug in_array() funktion 7 gange, for at se, om det 
//    valgte tal er iblandt de udtrukne
// 4) Hver gang, der er match, skriv "Du har gættet X rigtigt!" 

echo "<hr>";
$mine_valgte_tal = array(3, 6, 12, 24, 15, 33, 21);
$udtrukne_vindertal = array();
for ($i=0; $i<7; $i++) {
  
  $nyt_tal = rand(1,35);
  while (!in_array($nyt_tal, $udtrukne_vindertal)) {
      $udtrukne_vindertal[]=$nyt_tal;
  }
}
print_r($udtrukne_vindertal);
echo "<hr>";
$antal_rigtige = 0;
foreach ($udtrukne_vindertal as &$value) {
  if (in_array($value,$mine_valgte_tal)) {
    echo "<h2>$value er et vinderal. <br></h2>";
    $antal_rigtige++;
  } else {echo "$value er ikke et vinderal. <br>";}
}
echo "<hr>";
echo "Du har fået " . $antal_rigtige . " rigtige.<br>";
$gevinster = array (0, 0, 50, 200, 2000, 50000, 200000);
echo "<i>";
echo "Vinderprognose: med " . $antal_rigtige . " rigtige vil du få ca. $gevinster[$antal_rigtige] kroner udbetalt. ";
echo "</i>";







?>