








<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="css/styles.css">
 
</head>
<body class="hero" style=" background-color: black; opacity: 1;  background-image: url(boteco-bkc.png);">
 

<style>
table {
    background-color: #039cd3;
    color: black;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
} 
</style>




    <main >
        <section >

            <header>
                <nav>
                    <ul> 
                    <li><a href="/">Inicio</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="#reservas" rel="noopener"  >Reservar</a></li>
                        <li><a href="#contacto"  >Contacto</a></li>
                        <li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
                      <li  class="social" ><a href="https://www.facebook.com/moquecato/"> <img  width="30" height="30" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/></a></li>
                      <li  class="social" ><a href="https://www.instagram.com/littlebrazilmiami/?hl=en"><img width="30" height="30" src="https://img.icons8.com/color/48/instagram-new--v1.png" alt="instagram-new--v1"/></a></li>
                      <li  class="social"><a href="https://api.whatsapp.com/send/?phone=5491151234696" target="_blank"><img width="30" height="30" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp--v1"/></a></li>
                    </ul>
                </nav>
            </header>




            <?php 










$conn = new mysqli("ao9moanwus0rjiex.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","lz433sbvg6yghw2p","ns0u47xfk11p6vh2","cxtc21a6xabzei03");
//$conn = mysqli_connect("localhost","root","","db1");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



echo("<table>  
<tr>
<th>Nombre</th>
<th>Dia</th>
<th>Hora</th>
<th>Numero de personas</th>
<th>Extra</th>
</tr> 


"); 

$registro = mysqli_query($conn,"select * from  reservacione ");
while(list( $a,$b,$c ,$d,$e) = mysqli_fetch_array($registro)){



echo(" 
<tr>
<td>$a</td>
<td>$b</td>
<td>$c</td>
<td>$d</td>
<td>$e</td>
</tr> 


");




}






echo("</table>");


?> 
        
        </section>


</body>

</html>



?>






