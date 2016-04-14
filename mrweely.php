<html lang="en">
<head>
  <title>Mr. Wheely!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <? include_once 'navbar.php';
     include_once  'libary/Autos.php';?>
  <style>
      
   <? include_once "css/mycss.css";?>
  </style>
</head>
<?


    $merk = $_POST['merk'];
    $min = $_POST['min'];
    $max = $_POST['max'];
    
    $autos = array(
      new Auto("Audi", 102500, "Images/audi1.jpg"),    
      new Auto("Audi", 108250, "Images/audi1.jpg"),
      new Auto("Ferrari", 99500, "Images/ferrari1.jpg"),
      new Auto("Ferrari", 122500, "Images/ferrari2.jpg"),
      new Auto("Ferrari", 152500, "Images/ferrari3.jpg"),
      new Auto("Fiat", 10500, "Images/fiat1.jpg"),
      new Auto("Fiat", 11500, "Images/fiat2.jpg"),
      new Auto("Mercedes", 82500, "Images/mercedes1.jpg"),            
      new Auto("Mercedes", 132700, "Images/mercedes2.jpg"),
      new Auto("Mercedes", 87500, "Images/mercedes3.jpg"),
      new Auto("Mercedes", 222650, "Images/mercedes4.jpg"),
      new Auto("Opel", 13500, "Images/opel1.jpg"),
      new Auto("Opel", 9500, "Images/opel2.jpg"),
      new Auto("Opel", 19500, "Images/opel3.jpg"),
      new Auto("Volkswagen", 16340, "Images/vw1.jpg"),
      new Auto("Volkswagen", 18340, "Images/vw2.jpg"),
      new Auto("Volkswagen", 21670, "Images/vw3.jpg")            
    );

    $filter = new Filter($autos);
    $filtered = $filter->autoFilter($merk, $min, $max);
    ?>
  
<body>
    <img src="Images/wheely_header.jpg" width="100%">
    <div class="site">
    <form action="mrweely.php" method="POST"  id="merken">
    <select id="merk" name="merk">
    <option value="Alles">Alles</option>
    <option value="Audi">Audi</option>
    <option value="Ferrari">Ferrari</option>
    <option value="Fiat">Fiat</option>
    <option value="Mercedes">Mercedes</option>
    <option value="Opel">Opel</option>
    <option value="Volkswagen">Volkswagen</option>
  </select><br>
  <label for="min"></label>
  <input type="text" name="min" placeholder="--Min Prijs--"><br><br>
  <label for="max"></label>
  <input type="text" name="max" placeholder="--Max Prijs--"><br><br>
  <input type="submit" value="Filter">
    </form>

    <div class="row">
    <?php
    foreach($filtered as $auto){
    ?>
    <div class="image">
      <img src="<?= $auto->img ?>" alt="" style="border-radius: 10px;">
      <h5>Merk: <?= $auto->merk ?><br />Prijs: <?= $auto->prijs ?></h5>
    </div>
    <?php                   
    }
    ?>
    
</div>
</div>
</body>
</html>
 <?    
    // $nieuwauto[] = new Auto("Audi", 102500);
    // $nieuwauto[] = new Auto("Audi", 108250);
    // $nieuwauto[] = new Auto("Ferrari", 99500);
    // $nieuwauto[] = new Auto("Ferrari", 122500);
    // $nieuwauto[] = new Auto("Ferrari", 152500);
    // $nieuwauto[] = new Auto("Fiat", 10500);
    // $nieuwauto[] = new Auto("Fiat", 11500);
    // $nieuwauto[] = new Auto("Mercedes", 82500);            
    // $nieuwauto[] = new Auto("Mercedes", 132700);
    // $nieuwauto[] = new Auto("Mercedes", 87500);
    // $nieuwauto[] = new Auto("Mercedes", 222650);
    // $nieuwauto[] = new Auto("Opel", 13500);
    // $nieuwauto[] = new Auto("Opel", 9500);
    // $nieuwauto[] = new Auto("Opel", 19500);
    // $nieuwauto[] = new Auto("Volkswagen", 16340);
    // $nieuwauto[] = new Auto("Volkswagen", 18340); 
    // $nieuwauto[] = new Auto("Volkswagen", 21670);
    
    // $autos = array($nieuwauto);
    ?>