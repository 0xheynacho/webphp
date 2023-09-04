<?php 
$nombre = $_POST["nombre"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$personas= $_POST["personas"];
$comentarios = $_POST["comentarios"];


$conn = new mysqli("localhost","root","","res");
//$conn = mysqli_connect("localhost","root","","db1");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO reservacione values ('$nombre','$fecha','$hora',$personas,'$comentarios');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



?>