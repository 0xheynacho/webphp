<?php 



    $conn = new mysqli("ao9moanwus0rjiex.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","lz433sbvg6yghw2p","ns0u47xfk11p6vh2","cxtc21a6xabzei03");
//$conn = mysqli_connect("localhost","root","","db1");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "insert into reservacione values ( 'josenacho','asd','aa',10,'aasdad');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



?>
