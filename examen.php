<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acosta León Ixchel Andrea</title>
</head>
<body>

<?php
$Telefonos=[
["Telefono" =>'Iphone 3',  "precio"=> '20100'],
["Telefono" =>'Iphone 2',     "precio"=> '20000'],
["Telefono" =>'Iphone 1',  "precio"=> '19000'],
["Telefono" =>'Iphone 4',  "precio"=> '20300'],
];
uasort($Telefonos,function($a,$b){
return$a['precio'] <=> $b['precio'];
});

echo "<br>";
foreach ($Telefonos as $Telefono) {
echo "El Telefono ". $Telefono['Telefono']. " tiene un precio de :". $Telefono['precio'];
echo "<pre>";
}
echo "Telefonos ordenados por precio";
echo "<br>";

array_push($Telefonos, ["Telefono" =>'Iphone 5' , "precio"=>'20400']);
array_push($Telefonos, ["Telefono" =>'Iphone 6' , "precio"=>'50400']);
foreach ($Telefonos as $Telefono) {
echo "El Telefono ". $Telefono['Telefono']. " tiene un precio de :". $Telefono['precio'];
echo "<pre>";

}
?>
</body>
</html>