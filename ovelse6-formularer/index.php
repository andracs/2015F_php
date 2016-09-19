<DOCTYPE! html>
<html>
<head>
<title>Opret en begivenhed på Alt om Lolland Falster</title>
</head>
<body>

<!-- Her er et eksempel, som viser forskellige input types i forms -->
<form action="send_email.php" method="get">
  <h1>Opret en begivenhed på Alt om Lolland Falster</h1><br />

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