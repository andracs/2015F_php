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











?>