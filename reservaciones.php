<?php 


$conn = new mysqli("localhost","root","","res");
//$conn = mysqli_connect("localhost","root","","db1");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$registro = mysqli_query($conn,"select * from  reservacione ");
while(list( $a,$b,$c ,$d,$e) = mysqli_fetch_array($registro)){

echo();

}




?>