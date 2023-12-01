
<?php
$servidor="localhost";
$user="root"; 
$psw="";
$db="web";

$conn=new mysqli($servidor,$user,$psw,$db);

$correoo=$_POST["Correo"]; 
$contrasenaa=$_POST["Contrasena"];
// Recuperar los datos de la tabla
$sql = "INSERT INTO  datos2(correo,contrasena) values('$correoo' ,'$contrasenaa')";

mysqli_query($conn,$sql);
header("Location: tabla.php");
// Cerrar la conexión
$conn->close();
?>
