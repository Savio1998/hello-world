<?php
?>
<html lang="en">
<head>
  <title>Busreis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <? include 'navbar.php'; ?>
</head>
<body>
</body>
</html> <?
echo "Hallo bezoeker<br>";
$leeftijd = 12;
$korting = 0.5;
$prijs = "";

if ($leeftijd > 64){
    $prijsouderen = 10;
    $prijs = "Uw prijs voor entree is: ".$prijsouderen * $korting." euro";
    echo $prijs;
}
else if($leeftijd > 3 && $leeftijd < 18){
    $prijsjongeren = 5;
    $prijs = "Jouw prijs voor entree is: ".$prijsjongeren * $korting." euro";
    echo $prijs;
}
else if($leeftijd < 4){
    $prijskleuters = 0;
     $prijs = "Je kunt gratis naar binnen";
     echo $prijs;
}
else{
    $prijs = "Prijs voor entree is 5 euro";
    echo $prijs;
}
?>