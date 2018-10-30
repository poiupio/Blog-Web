<?php

$_SESSION['user']=@$_POST['nombre'];
$_SESSION['user']=@$_POST['usuario'];
$_SESSION['user']=@$_POST['contraseña'];
$_SESSION['user']=@$_POST['confirmarContraseña'];

  $nombre_usuario=@$_POST['usuario'];
  $correo_usuario=@$_POST['correo'];
  $contraseña=@$_POST['contraseña'];
  $confirm_contraseña=@$_POST['Confirmarcontraseña'];
  $nombre_archivo="Usuarios.txt";
  $bandera_verdadera=true;
  $bandera_contraseña=true;
  
//Validar igualdad de contraselas
if($contraseña!=$confirm_contraseña)
{
    echo '<script language="javascript">';
    echo 'alert("Las contraseñas no coinciden")';  
    echo '</script>';
    $bandera_contraseña=false;
    include('Registro.html');
}



if($bandera_contraseña){
    if(validarUsuario($nombre_usuario,$correo_usuario,$contraseña)){
        registrarUsuario($nombre_usuario,$correo_usuario,$contraseña);
        include('Index.php');
    }
    else{    
        include('Registro.html');
    }
}


function validarUsuario($usuario,$correo, $contraseña){
$validacion=true;
$nombre_archivo="Usuarios.txt";
$names=file($nombre_archivo);
foreach($names as $name)
{ 
 
  $email_array = explode(',', $name);
   $tamanioArray=sizeof($email_array);
   
   if($tamanioArray>1)
   {
      if($email_array[0]==$usuario){     
        echo '<script language="javascript">';
        echo 'alert("El usuario ya esta registrado en la pagina")';  
        echo '</script>';
       
        $validacion=false;        
        break;
     
    }

      if($email_array[1]==$correo){     
        echo '<script language="javascript">';
        echo 'alert("El correo ya esta registrado en la pagina")';  
        echo '</script>';
       
        $validacion=false;        
        break;
          
      
 }


}
  
}

return $validacion;

}

  

    function registrarUsuario($usuario,$correo,$contraseñaUsuario){
      $nombre_arch="Usuarios.txt";
    @ $fp = fopen($nombre_arch, 'ab');   
    fwrite($fp,PHP_EOL . $usuario . ',' . $correo . ',' . $contraseñaUsuario );    
    fclose($fp);
    echo '<script language="javascript">';
    echo 'alert("Creado exitosamente")';  
    echo '</script>';
    
    }
 ?>   