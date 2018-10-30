<?php
	session_start();
	@$_SESSION['user'];
  $nombre_usuario=@$_POST['nombre'];
  $contraseña=@$_POST['contraseña'];
  $nombre_archivo="Usuarios.txt";
  $bandera_verdadera=true;
  $bandera_contraseña=true;
  
if(validarUsuario($nombre_usuario,$contraseña))
{
		$_SESSION['user']=@$_POST['nombre'];
        echo '<script language="javascript">';
        echo 'alert("Acceso Valido")';  
        echo '</script>';
        include('Index.php');
}

else{
		session_destroy();
        echo '<script language="javascript">';
        echo 'alert("Acceso invalido")';  
        echo '</script>';
        include('PR4.html');
}

function validarUsuario($usuario,$contraseña){
$validacion=false;
$nombre_archivo="Usuarios.txt";
$names=file($nombre_archivo);
foreach($names as $name)
{ 
 
  $email_array = explode(',', $name);
  $tamanioArray=sizeof($email_array);
  $contraseñaModificado=trim($email_array[2]);
   if($tamanioArray>1)
   {
	 
      if($email_array[0]==$usuario){
      
      if($contraseñaModificado==$contraseña)     
      {
        $validacion=true;     
        break;
         }
     }

      if($email_array[1]==$usuario){    
        if($contraseñaModificado==$contraseña)     
        {  
         $validacion=true;       
          break;
        }  
       }
} 
}
 return $validacion;
}



 

?>