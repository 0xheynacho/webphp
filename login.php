

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="css/styles.css">
 
</head>
<body class="hero" style=" background-color: black; opacity: 1;  background-image: url(boteco-bkc.png);">
 

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
<form action="login.php" method="post">
   
    <div >
    <h1> Login</h1>
<label for="uid" > Usuario</label>
<input type="text" name="uid" placeholder = "usuario"  value = "">
<label for="pwd"> Contraseña</label>
<input type="text" name="pwd" placeholder = "Contraseña">
<button type="submit"> entrar </button>
</div>



</form>
<h1 id="pwdin" style=" display: none;"> Contraseña Incorrecta</h1>

        
        </section>


</body>

</html>

<?php 
echo(' <script> document.getElementById("pwdin").style.display = "none";</script>');
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];

if ($uid == "jose" && $pwd == "ignacio")
{
    header("Location: i.php");

}
else if ($uid == null && $pwd == null ){
 echo(' <script> document.getElementById("pwdin").style.display = "none";</script>')
 ;}
 else {
    echo(' <script> document.getElementById("pwdin").style.display = "block";</script>')
    ;}



?>
