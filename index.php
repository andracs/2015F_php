<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PHP og MySQL øvelser med András Ács</title>
  <meta name="description" content="PHP og MySQL øvelser med András Ács">
  <meta name="author" content="András Ács">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="css/typebase.css" rel="stylesheet">
  <link href="css/andras.css" rel="stylesheet">

</head>

<body>
<h1>PHP & MySQL</h1>
<p>PHP og MySQL øvelser med <a href="http://acsandras.dk" >András Ács</a>, EASJ Nykøbing, 2016 efterår. <a href="https://docs.google.com/document/d/1sS4Nqc1Sy-1-YgRen3YtBI1qN0YOVR4vrgUhyulAD-I/edit#heading=h.gw8cxobu17qw">Se lektionsplan...</a> </p>
<h2>Øvelser i denne mappe</h2>

<?php 
    // Viser mapper, og kun mapper fra den aktuelle mappe (root folder)
    foreach(glob('./*', GLOB_ONLYDIR) as $dir) {
      $dirname = basename($dir); 
      if ( $dirname!="css") echo "<a href='$dirname'>" . $dirname . "</a><br />";
    }
?>

<h2>PHP playground</h2>

<?php 
/************************ Velkommen til PHP- og MySQL-legepladsen***************************/

for ($i=12; $i<15; $i++) { echo "$i små soldater<br />"; }

?>
<footer>András Ács, 2016 - <a href="mailto:anac@easj.dk">anac@easj.dk</a> </footer>

</body>
</html>
