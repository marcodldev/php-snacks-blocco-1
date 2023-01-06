<?php 

$partite = [

  [ "squadraCasa" => "milan" ,
  "squadraOspite" => "inter" ,
  "puntiCasa" => 39,
  "puntiOspite" => 23,
  ]  ,
  [ "squadraCasa" => "padova" ,
  "squadraOspite" => "genova" ,
  "puntiCasa" => 65,
  "puntiOspite" => 34,
  ]  ,
  [ "squadraCasa" => "lecce" ,
  "squadraOspite" => "roma" ,
  "puntiCasa" => 76,
  "puntiOspite" => 21,
  ]  
  
];

for($i = 0; $i < count($partite); $i++) {

    echo $partite[$i]["squadraCasa"] . '-' . $partite[$i]["squadraOspite"] . '|' . $partite[$i]["puntiCasa"] . $partite[$i]["puntiOspite"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


</body>
</html>