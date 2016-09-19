<?php
 
/* Denne 7-trinsøvelse går ud på at lære at arbejde med HTML Forms og PHP Forms.
1) Vi tegnede formen på papir
2) Vi kodede frontend (formen) i HTML (kunne også bruge CSS og JS)
3-4) Vi sendte data fra formen med hhv. POST og GET til webserveren
5-6) Vi skrev en "form handling code" i PHP, som hhv. viste det indsendte data på skærmen og sendte den som en e-mail
7) DENNE NÅEDE VI IKKE ENDNU: Dataen skal gemmes i databasen. 

TUTORIALS, DU KAN FØLGE: 
HTML FORMS - http://www.w3schools.com/html/html_forms.asp
PHP FORMS - http://www.w3schools.com/php/php_forms.asp 
PHP MAIL - http://www.w3schools.com/php/func_mail_mail.asp
*/

/* Jeg bruger print_r til debugging, fordi den kan vise, hvad der er i en array */
// print_r($_POST);
// print_r($_GET);

/* Variablet $_POST er et array, som indeholder data fra formular, som er sendt hertil */ 
echo "Du har insendt et arrangement med navnet: " . $_GET['begivenheds_navn'];

/* Vi gør klar til at sende en e-mail med formulardata */ 
$msg = "Der er insendt et arrangement med navnet: " . $_GET['begivenheds_navn'];
$headers = "From: noreply@easj.dk";

/* Bruger mail() funktionen til at sende data  */
$er_det_afsendt = mail("anac@easj.dk","Ny begivenhed indtastet", $msg, $headers);
if($er_det_afsendt) echo "<br />Du har nu indsendt et arrengement til AOLF.DK, mail er afsendt.";

/* Lex Lonnie - der er forskel mellem enkel- og dobbelt-anførselstegn, når man bruger echo */
echo "<hr>";
$planet = "Venus";
echo "$planet"; // Viser Venus, dvs. variablets VÆRDI
echo " | ";
echo '$planet'; // Viser $planet, dvs. variablets NAVN


?>