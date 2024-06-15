<?php


$conexion = mysqli_connect('localhost', 'root', '', 'sm32');
$server = "localhost";
$user = "root";
$password = "";
$database = "sm32";





$tabla = [];

$id=$_POST ['id'];
  $isbn=$_POST ['isbn'];
  $nombre=$_POST ['nombre'];
  $autor=$_POST ['autor'];
  $precio=$_POST ['precio'];
  $editorial=$_POST ['editorial'];
  $imagen=$_POST ['imagen'];

  $peticionInsertar = "INSERT INTO libros (id,isbn,autor,nombre,precio,editorial,imagen)
  VALUES ('$id','$isbn','$nombre','$autor','$precio', '$editorial','$imagen')";
  
  if(mysqli_query($conexion,$peticionInsertar))
  {
      echo 'Datos isenrtados correctamente';    
  }
  else
  {
      echo 'Error al insertar los datos';
     
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

echo'<a href=mostrar_libros_bd.php>regresar</a>';
?>



