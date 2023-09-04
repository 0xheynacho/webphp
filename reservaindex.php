<?php 

$nombre = $_POST["nombre"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$personas= $_POST["personas"];
$comentarios = $_POST["comentarios"]; 


    $conn = new mysqli("ao9moanwus0rjiex.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","lz433sbvg6yghw2p","ns0u47xfk11p6vh2","cxtc21a6xabzei03");
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
