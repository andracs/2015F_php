<DOCTYPE! html>
<html>
<head>
<title>Opret en begivenhed på Alt om Lolland Falster</title>
  <link href="../css/typebase.css" rel="stylesheet">

</head>
<body>

  <!-- Et eksempel, som viser forskellige input types i forms -->
  <h1>Opret en begivenhed på Alt om Lolland Falster</h1>
  <p> Her er et eksempel på en HTML formular, som det kunne se ud på sitet Alt om Lolland Falster. Se også <a href="insert.php">insert.php</a>, hvor du kan se et eksempel på at data gemmes i database fra formularen.<br /><br /></p>

  <!-- Denne linje er vigtig!  Formularen sendes til send_email.php med GET metode. Vil POST være bedre? -->
  <form action="send_email.php" method="get">
  
  <fieldset>
    <legend>Om begivenheden:</legend>
    Begivenhedens navn: <input type="text" name="begivenheds_navn"><br /> Beskriv begivenheden maks 10 linjer:<br />
    <textarea name="message" rows="10" cols="30">Din tekst</textarea><br /> Dato:<input name="dato" type="date"><br /> Tid: <input type="time" name="usr_time">
    <br />Arrangør e-mail: <input type="email" name="usremail"><br /> 
    <input type="hidden" name="gps" value="Data fra Javascript">
    <input type="radio" name="pris" value="gratis"> Gratis entré <br>
    <input type="radio" name="pris" value="koster"> Ikke gratis<br>
    Upload et billede eller PDF: <input type="file" name="img"><br />
  </fieldset>

  <fieldset>
    <legend>Om dig selv:</legend>
    Dit navn: <input type="text" name="usremail"><br /> Dit telefonnummer: <input type="tel" name="usremail"><br />
  </fieldset>
  <input id="indsend" type="submit" value="Opret begivenhed">

</form>


</body>
</html>