<html lang="en">
<head>
  <title>Functies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <?php include 'navbar.php'; ?>
  <style>
      .text{
          margin-left: 20px;
          padding: 20px;
      }
  </style>
  </head>
  <body>
      <div class="text">
  <? 
    $a = 6;
    //$s = "Hallo draai mij om";
    
    ?><h3><?reverse($a);?></h3><?
    celFahren($a);
    divisible($a);
    
      if (divisible($a) ){
        echo "Ja ".$a." is deel baar door 3";
    } else {
        echo "Nee je kan ".$a." niet door 3 delen";
    }

    function celFahren($c) {
		$f = ($c * 9) / 5 + 32;
		echo "°".$c." Celcius = °".$f." Fahrenheit<br>";
    }
    
    function divisible($d) {
        if($d % 3 == 0){
            return true;
        }
    }
    function reverse($a) {
        echo strrev("Hoeveel Fahrenheit is ".$a." Celcius & is het deelbaar door 3?");
        echo "<br>";
    }?>  
  </body>
  </html>