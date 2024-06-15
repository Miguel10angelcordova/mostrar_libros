<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "libreria";

$conexion = mysqli_connect('localhost','root','','libreria');

if ($conexion->connect_errno){
  die("conexion fallida" .  $conexion->connect_errno);
}else{
    echo "se ha conectado ala base de datos sm32";
}


$tabla = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $isbn = $_POST['isbn'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $precio = $_POST['precio'];
    $editorial = $_POST['editorial'];
    $imagen = $_POST['imagen'];

    if ($isbn === '') {
        $tabla[] = 'Debes especificar un id';
    }
    if ($nombre === '') {
        $tabla[] = 'Debes especificar un isbn';
    }
    if ($autor === '') {
        $tabla[] = 'Debes especificar un nombre';
    }
    if ($precio === '') {
        $tabla[] = 'Debes especificar un precio';
    }
    if ($editorial === '') {
        $tabla[] = 'Debes especificar una editorial';
    }
    if ($imagen === '') {
        $tabla[] = 'Debes especificar una imagen';
    }
}
    
  
  


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


    

</body>

  

<?php
if(isset($_POST['EnViar'])){

  $id=$_POST ['id'];
  $isbn=$_POST ['isbn'];
  $nombre=$_POST ['nombre'];
  $autor=$_POST ['autor'];
  $precio=$_POST ['precio'];
  $editorial=$_POST ['editorial'];
  $imagen=$_POST ['imagen'];
}

$consulta = "SELECT * FROM `libros`;";
  $result=mysqli_query($conexion,$consulta);

if($result)
{
echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>isbn</th></h1>";
echo "<th><h1>nombre</th></h1>";
echo "<th><h1>autor</th></h1>";
echo "<th><h1>precio</th></h1>";
echo "<th><h1>editorial</th></h1>";
echo "<th><h1>imagen</th></h1>";
echo "</tr>";
while($colum = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td/><h2>" . $colum['id']. "</td></h2>";
    echo "<td/><h2>" . $colum['isbn']. "</td></h2>";
    echo "<td/><h2>" . $colum['nombre']. "</td></h2>";
    echo "<td/><h2>" . $colum['autor']. "</td></h2>";
    echo "<td/><h2>" . $colum['precio']. "</td></h2>";
    echo "<td/><h2>" . $colum['editorial']. "</td></h2>";
    echo "<td/><h2>" . $colum['imagen']. "</td></h2>";
    echo "</tr>";
}
echo "</table>";

echo'<a href=/admin/index.php/>regresar</a>';

