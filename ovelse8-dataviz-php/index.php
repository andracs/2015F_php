<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "world";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us">
  <head>
    <title>TufteGraph: beautiful charts with jQuery</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="raphael.js"></script>
    <script type="text/javascript" src="jquery.enumerable.js"></script>
    <script type="text/javascript" src="jquery.tufte-graph.js"></script>
    <link rel="stylesheet" href="tufte-graph.css" type="text/css" media="screen" charset="utf-8" />

    <style>
      body { font-family: georgia; font-size: 14px }
      #container {
        margin: 0 auto;
        width: 930px;
      }
      .download {
        float: right;
        font-size: 1.5em;
      }
      .footer {
        width: 100%;
        text-align: center;
        color: #999999;
        font-size: 0.8em;
        margin-top: 30px;
      }

      
      .intro { font-size: 1.4em; }
      .differences { clear: both; }

      span.doc { color: green; font-weight: bold; }
      a { color: black; }
      a:visited { color: gray; }
      h2 { clear: both; }

      .awesome .graph-header { width: 570px; }

    </style>

    <script type="text/javascript">
      $(document).ready(function () {
        jQuery('#awesome-graph').tufteBar({
          data: [
                       <?php 
            $sql = "SELECT * FROM Country ORDER BY Population DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Code: " . $row["Code"]. " - Name: " . $row["Name"]. " Population: " . $row["Population"]. "<br>";
        echo "    [" . ($row["Population"] /1000000) . ", {label: '" .  $row["Name"] . "'}],"; 
    }
} else {
    echo "0 results";
}
$conn->close(); 
?>
        
          ],
          barWidth: 0.8,
          barLabel:  function(index) { return this[0]  },
          axisLabel: function(index) { return this[1].label },
          color:     function(index) { return ['#E57536', '#82293B'][index % 2] }
        });

       
      });
    </script>
  </head>
  <body>
    <div id="container">
<div class='example awesome'>
      <div class='graph-header'>
        <h3>Verdens lande</h3>
        <p>Measured by population</p>
      </div>
      <div id='awesome-graph' class='graph' style='width: 870px; height: 200px;'></div>
    </div>  </body>
</html>
