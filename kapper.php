<?php
?>
<html lang="en">
<head>
  <title>Kapperzaak Sanders</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <? include 'navbar.php'; ?>
  <style>
      table, td, th {
          margin-left: 10px;
          border: 1px solid black;
          padding : 10px;
      }
      .open{
          margin-left: 10px;
          margin-top: 20px;
      }
  </style>
</head>
<body>
 <?
$kapper["9:15"] = "Mevr. Pietersen";
$kapper["9:30"] = "Mevr. Willems";
$kapper["9:45"] = "";
$kapper["10:00"] = "Paul van den Broek";
$kapper["10:15"] = "Karel de Meeuw";
$kapper["10:30"] = "";
?><table>
<th>Tijd</th>
<th>Afspraak</th><?

foreach ($kapper as $tijd => $afspraak){
    
     ?>
        <tr>
            <td> <?=$tijd?> uur</td>		
            <td><?=$afspraak?></td> <?
            
    }?>
    
</tr>
</table>
<div class="open">
<?
echo "Beschikbare tijden:<br>";
foreach ($kapper as $tijd => $afspraak){
    if($afspraak == "") { 
        print("<li>".$tijd."</li>") ;
    }
}?></div>
</body>
</html>