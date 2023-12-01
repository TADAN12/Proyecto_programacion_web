
<?php
$servidor="localhost";
$user="root"; 
$psw="";
$db="web";

$conn=new mysqli($servidor,$user,$psw,$db);

$idd=$_POST['id'];
$correoo=$_POST['correo'];
$contrasenaa=$_POST['contrasena'];
// Recuperar los datos de la tabla
if(empty($_POST['id']))  {
    header("Location: tabla.php");
   echo"esta vacio";
    return;
}
else{
    $sql = "UPDATE datos2 SET correo='$correoo' , contrasena='$contrasenaa' WHERE id=$idd";
}

mysqli_query($conn,$sql);

header("Location: tabla.php");



// Cerrar la conexión
$conn->close();
?>
