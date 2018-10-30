<?php
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
?>
<!doctype html>
<html>
<head>
<title>SoftAOX | List files and directories inside the specified path in PHP</title>
</head>
<body>
<h2>List files and directories inside the specified path in PHP</h2>
<p>List of files:</p>
<ul>
<p><?php echo $msg ?></p>
</ul>
</body>
</html>




