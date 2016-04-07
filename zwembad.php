<?php
?>
<html lang="en">
<head>
  <title>Zwembad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <? include 'navbar.php'; ?>
  <style>
      td{
          padding: 10px;
          padding-right: 50px;
      }
      
      
      th{
          padding: 10px;
          padding-right: 50px;
      }
      
  </style>
</head>
<body>
 <?
$zwemclubs["De Spartelkuikens"] = 25;
$zwemclubs["De Waterbuffels"] = 32;
$zwemclubs["Plonsmederin"] = 11;
$zwemclubs["Bommetje"] = 23;
?><table class="table-bordered">
<th>Zwemclubs</th>
<th>Leden</th>
<tbody><?
foreach ($zwemclubs as $label => $waarde){
    $plaatjes = ($waarde / 5) -1;
     ?>
        <tr>
            <td><?=$label?></td>		
            <td><?=$waarde?></td>
            <td>
            <?
    for($p = 0; $p <= $plaatjes; $p++){
      ?><img src="http://php-savio.appspot.com/Images/Zwemicon.png" alt="Image" />
      <?
    }?>
    
    </td>       
    
<?}?>
</tr>
</tbody>
</table>

</body>
</html>