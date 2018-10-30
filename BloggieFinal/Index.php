<?php
@session_start();
echo "Bienvenido:".@$_SESSION['user'];
$msg = "";
if($handle = opendir('entradas')){
while (false !== ($file = readdir($handle)))
{
$path_partes= pathinfo($file);
$nombreFile=$path_partes['filename'];
if (($file != ".")
&& ($file != "..") && ($nombreFile!="css"))
{
$path_parts= pathinfo($file);
$sinExtension=$path_parts['filename'];
$direccion="entradas/" . $file;
$msg .= '<li><a href="'.$direccion.'">'.$sinExtension.'</a></li>';
}
}
closedir($handle);
}
$crearEntradaBtn = "";
$iniciarSesionBtn = "";
if (@$_SESSION['user'] != null){
	$crearEntradaBtn = '<li><a class="navbar-content" href="creaEntrada.html">Crear entrada</a></li>';
			echo '<a style="color:#ffffff" href="logOut.php"> Cerrar sesión </a><br>';
	
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
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
        
        <title>Blog</title>
        <link href="css/media.css" rel="stylesheet">
        <link href="fonts/style.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
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
     
        <div class="jumbotron">
            <div id="jumboContainer">
                <h1 class="h1jumbo">BIENVENIDO</h1>
                <p>
                    descripcion de ejemplo <3
                    
                </p>
            </div>
        </div>
        
        <div class="left-content block">
        <div class="tools busqueda">
            <div class="container">
                <div class="panel-heading"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Busqueda</div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="¿qué buscas?">
                    </div>
                    <button class="form-control">Buscar </button>
                </div>
            </div>
        </div>
            
        <div class="tools filtro">
            <div class="container ">
                <div class="panel-heading"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> FIltro</div>
                <div class="panel-body">
                </div>
            </div>
        </div>
            
        <div class="tools archivo">
            <div class="container ">
                 <p><?php echo $msg ?></p>  
                <div class="panel-heading"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo</div>
                
                <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
                                                                                                            <!-- implementar buscador mobil-->
            <div class="entradas block2">
                <div class="panel-heading"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>Entradas</div>
                <div class="panel-body entradas-body"> 
                         
                   
                    <?php echo $msg ?></p>
                </div>
            </div>
        
         <footer id="footer-page" role="contentinfo"><!--Pie de pagina, usado para marcar partes adicionales-->
            <a style="float:right;" href="https://www.facebook.com/" target=”_blank”><img src="https://image.flaticon.com/icons/svg/145/145802.svg" width="35"></a>      
            <a style="float:right;" href="https://mobile.twitter.com/" target=”_blank”><img src="https://image.flaticon.com/icons/svg/145/145812.svg" width="35"></a>
            <a style="float:right;" href="https://plus.google.com/discover" target=”_blank”><img src="https://image.flaticon.com/icons/svg/145/145804.svg" width="35"></a> 

            <div id="borrar">
             Este artículo es propiedad de Daniel, Gerardo, Roberto, Mauricio y Andres.
             Puedes contactarnos a: <a href="mailto: correopagweb@alumnos.uady.mx">correopagweb@alumnos.uady.mx</a>
            </div>
        </footer> 
        
        <script src="js/jquery.min.js"></script>
    </body>
</html>
