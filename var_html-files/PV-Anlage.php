<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="300">
  <title>PV-Anlage</title>
<style>html { font-family: Helvetica; display: inline-block; margin: 0px auto; text-align: center;}
body{margin-top: 50px;} h1 {color: #444444;margin: 50px auto 30px;}
p {font-size: 24px;color: #444444;margin-bottom: 10px;}
</style> 

 </head>
<body>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=goodwe', 'raspi', 'raspi');

$sql = "SELECT * FROM pv ORDER BY id DESC LIMIT 1";
foreach ($pdo->query($sql) as $row)
echo "<p>Leistung: " . $row['power']. " W </p> <p> letzte Messung: " . $row['datumuhrzeit']. " </p> </div>";

?>
</body>
</html>
