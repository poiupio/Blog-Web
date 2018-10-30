<?php
session_start();
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo '<script> alert("Upss... El archivo es muy grande. Tu archivo no fue cargado."); </script>';
		$uploadOk = 0;
	}
	if ($uploadOk != 0) {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			//echo '<script> alert("El archivo ha sido cargado exitosamente"); </script>';
		} else {
			echo "Lo sentimos, un error ocurrió al momento de subir el archivo.";
		}
	}
	//Antes del titulo de la pagina
$titulo=@$_POST['titulo'];
$contenido=@$_POST['informacion'];
$nombreImagen="../" . $target_file;
$imagen="<br><br>" . "<img src=\"" . $nombreImagen . "\">";

    $plantillaInicio = 
            "<html>
            <head lang=\"es\">
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <title>";
    //Despues del titulo de la pagina, antes del encabezado
    $plantillaMedio = "
            </title>

            <link href=\"css/entradas.css\" rel=\"stylesheet\">
            <style>
            div { margin-left: 35% ; width: 50% ; text-align : justify;}  
            textarea { font-size:16px; font-family: \"Times New Roman\", Times, serif;}

            </style>
            </head>

            <body>
            <nav >
            <ul class=\"nav\">
                
                <li><a class=\"navbar-brand\" href=\"../Index.php\">BLOGUIE</a></li>
                <li><a class=\"navbar-content\" href=\"../cargarImagenes.php\">Media </a></li>
                <li><a class=\"navbar-content\" href=\"../about.html\">Informacion </a></li>
                <li><a class=\"navbar-content\" href=\"../PR4.html\">Iniciar sesion</a></li>
                <li><a class=\"navbar-content\" href=\"../Registro.html\">Registrarse</a></li> 
                
               
            </ul>
        
            <ul class=\"menu\">
                    <li><a href=\"#\">Menu</a>
                            <ul class=\"submenu\">
                                   
                            <li><a class=\"navbar-content\" href=\"../Index.php\">BLOGUIE</a></li>
                            <li><a class=\"navbar-content\" href=\"../cargarImagenes.php\">Media </a></li>
                            <li><a class=\"navbar-content\" href=\"../about.html\">Informacion </a></li>
                            <li><a class=\"navbar-content\" href=\"../PR4.html\">Iniciar sesion</a></li>
                            <li><a class=\"navbar-content\" href=\"../Registro.html\">Registrarse</a></li> 
                            
                                    
                            </ul>
                    </li>
            </ul>
        
    </nav>
            
            <div>
            ";
    //despues del contenido
    $plantillaFinal = 
            "</div><footer id=\"footer-page\" role=\"contentinfo\"><!--Pie de pagina, usado para marcar partes adicionales-->
            Este artículo es propiedad de Daniel, Gerardo, Roberto, Mauricio y Andres.
            <a style=\"float:right;\" href=\"https://www.facebook.com/%22target=\" target= \"_blank\"><img src=\"https://image.flaticon.com/icons/svg/145/145802.svg\" width=\"35\"></a>
            <a style=\"float:right;\" href=\"https://mobile.twitter.com/%22target=\" target= \"_blank\"><img src=\"https://image.flaticon.com/icons/svg/145/145812.svg\" width=\"35\"></a>
            <a style=\"float:right;\" href=\"https://plus.google.com/discover%22target=\" target= \"_blank\"><img src=\"https://image.flaticon.com/icons/svg/145/145804.svg\" width=\"35\"></a> 
            <address>
             Puedes contactarnos a: <a href=\"mailto: correopagweb@alumnos.uady.mx\">correopagweb@alumnos.uady.mx</a>
            </address>
            </footer> 
            </body>
            </html>";
    
    date_default_timezone_set('America/Mexico_City');
    $fecha = "" . date("Y-m-d-H-i-s");
    
    $nombreArchivo = "entradas\\" . $fecha . ".html"; 
    
    $pagina = $plantillaInicio . $titulo . $plantillaMedio . "<h1 >" . $titulo . "</h1><p class=\"contenidoEntrada\">  " . $contenido . $imagen .  "</p" . $plantillaFinal;
    $archivo = fopen($nombreArchivo, "w+");
    fwrite($archivo, $pagina);
    fclose($archivo);        
    
    
    include("Index.php");
      

    ?>