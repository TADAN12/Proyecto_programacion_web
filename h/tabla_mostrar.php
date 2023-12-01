
<?php
$servidor="localhost";
$user="root"; 
$psw="";
$db="web";

$conn=new mysqli($servidor,$user,$psw,$db);


// Recuperar los datos de la tabla
$sql = "SELECT * FROM datos2";
$result = $conn->query($sql);

// Generar la tabla HTML
if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Correo</th><th>Contraseña</th><th>Eliminar </th></tr>\n";
  // Salida de datos de cada fila
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["correo"]."</td><td>".$row["contrasena"]."</td>\n";
    echo "<td>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='id_a_eliminar' value='" . $row['id'] . "'>";
    echo "<input type='hidden' name='confirmacion' value='SI'>"; 
    echo "<input class='confirm' type='submit' name='eliminar' value='Eliminar'>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 resultados";
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirmacion'])) {
  // El formulario de confirmación ha sido enviado

  // Verificar si se ha confirmado la eliminación
  if ($_POST['confirmacion'] === 'SI') {
      // Procesar la eliminación
      if (isset($_POST['eliminar'])) { 
          $id_a_eliminar = $_POST['id_a_eliminar']; 

          $consulta_eliminar = "DELETE FROM datos2 WHERE id = $id_a_eliminar";

          if (mysqli_query($conn, $consulta_eliminar)) {
              echo "<div style='font-size: 20px; text-align: center;'><b>Registro Eliminado Exitosamente<b></div>";
              header("Location: tabla.php");
          } else {
              echo "<div style='font-size: 20px; text-align: center;'><b>Error al intentar eliminar el registro: . mysqli_error($conn)<b></div>";
          }
      }
  } else {
      echo "<div style='font-size: 20px; text-align: center;'><b>Debes Confirmar La Selección<b></div>";
  }
}
// Cerrar la conexión
$conn->close();
?>




