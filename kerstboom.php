<?php 
?>
<html lang="en">
<head>
  <title>Kerstboom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <? include 'navbar.php'; ?>
  <style>
      body{
          text-align:center;
      }
      </style>
</head>
<body>
</body>
</html> <?
$hoogte = 10;

for($kerstballen = 0; $kerstballen < $hoogte; $kerstballen++){
    for($ballen = 1; $ballen < $kerstballen; $ballen++){
        echo " * ";
    }
    echo "<br>";
}

