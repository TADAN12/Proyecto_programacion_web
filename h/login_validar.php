<?php
$servidor="localhost";
$user="root"; 
$psw="";
$db="web";

$conn=new mysqli($servidor,$user,$psw,$db);

$correoo=$_POST["correo"]; 
$contrasenaa=$_POST["contrasena"];
// Recuperar los datos de la tabla
$sql = "SELECT * FROM datos2";
$result = $conn->query($sql);
$validar=FALSE;


// Generar la tabla HTML
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["correo"]."</td><td>".$row["contrasena"]."</td></tr> \n";

    if($row["correo"]==$correoo and $row["contrasena"]==$contrasenaa
    ){
        $validar=TRUE;
        header("Location: tabla.php");
        break;
    }

  }
  if($validar==FALSE){
    header("Location: login.php");
  }

} else {
    echo "no resultaados";
}

// Cerrar la conexión
$conn->close();
?>
