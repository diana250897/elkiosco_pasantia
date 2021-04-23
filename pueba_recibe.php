<?php
require_once('conexion.php');
echo "yo recibo datos <br>";
$device=$_GET['device_label']; // se indican las variables $ nombre de variable 
$temperature=$_GET['temperature'];
$humity=$_GET['humidity'];
$conn=new conexion();


// Se insertan datos a la base de datos tabla histórico desde el formulario html
$query="INSERT INTO devicehistoric(idDevice,variable,valor,fecha) VALUES ('$device','temperatura','$temperature',NOW())";
$insert=mysqli_query($conn->conectarbd(),$query);

$query ="INSERT INTO devicehistoric(idDevice,variable,valor,fecha) VALUES('$device','humedad','$humity',NOW())";
$insert = mysqli_query($conn->conectarbd(),$query);
    echo "***Recibido***<br>";

    echo "{DEVICE:".$device.", TEMP:".$temperature.", HUMI:".$humity."}";



?>