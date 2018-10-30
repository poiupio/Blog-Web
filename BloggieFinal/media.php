<?php
@session_start();
$crearEntradaBtn = "";
$iniciarSesionBtn = "";
if (@$_SESSION['user'] != null){
	$crearEntradaBtn = '<li><a class="navbar-content" href="creaEntrada.html">Crear entrada</a></li>';
	
} else {
	$iniciarSesionBtn = '<li><a class="navbar-content" href="PR4.html">Iniciar sesion</a></li><li><a class="navbar-content" href="Registro.html">Registrarse</a></li>';
}
?>
<!DOCTYPE html>
<html>
 <head lang="es">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Media</title>

    <link href="css/media.css" rel="stylesheet">
</head>
<body>

<nav >
                <ul class="nav">
                    <li><a class="navbar-brand" href="Index.php">BLOGUIE</a></li>
                    <li><a class="navbar-content" href="cargarImagenes.php">Media </a></li>
                    <li><a class="navbar-content" href="about.html">Informacion </a></li>
                    <?php
						echo $iniciarSesionBtn;
					?>
					<?php
						echo $crearEntradaBtn;
					?>
                </ul>
            
                <ul class="menu">
                        <li><a href="#">Menu</a>
                                <ul class="submenu">
                                        <li><a class="navbar-content" href="Index.php">Inicio</a></li>
                                        <li><a class="navbar-content" href="cargarImagenes.php">Media </a></li>
                                        <li><a class="navbar-content" href="about.html">Informacion </a></li>
                                        <li><a class="navbar-content" href="PR4.html">Iniciar sesion</a></li>
                                        <li><a class="navbar-content" href="Registro.html">Registrarse</a></li>
                                </ul>
                        </li>
                </ul>
            
        </nav>
<!--Barra de navegacion de la pagina-->


<div>
    <div class="jumbotron">
        <h1>Fotos</h1>
        <p>
            Fotos mejor valoradas. <3
        </p>
    </div>
	
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img01">
<div id="caption"></div>
</div>


<!--Footer de la pagina-->
 <footer id="footer-page" role="contentinfo"><!--Pie de pagina, usado para marcar partes adicionales-->
      <a style="float:right;" href="https://www.facebook.com/" target=”_blank”><img src="https://image.flaticon.com/icons/svg/145/145802.svg" width="35"></a>      
      <a style="float:right;" href="https://mobile.twitter.com/" target=”_blank”><img src="https://image.flaticon.com/icons/svg/145/145812.svg" width="35"></a>
      <a style="float:right;" href="https://plus.google.com/discover" target=”_blank”><img src="https://image.flaticon.com/icons/svg/145/145804.svg" width="35"></a> 
      
      <div id="borrar">
       Este artículo es propiedad de Daniel, Gerardo, Roberto, Mauricio y Andres.
       Puedes contactarnos a: <a href="mailto: correopagweb@alumnos.uady.mx">correopagweb@alumnos.uady.mx</a>
      </div>
  </footer> 
  <script>
window.onload=function(){
     // Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var myImg = document.getElementsByClassName('img');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


for (var i = 0; i < myImg.length; i++) {
    myImg[i].onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
}


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
    }
}
    
   
</script>
</body>
</html>