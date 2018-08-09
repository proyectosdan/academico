 
      <html> 
      <head>
         <title>Ejemplo de ingreso de datos en base de datos MySQL</title>
      </head> 
 
      <body>
 
      <?php
 
      // Dirección o IP del servidor MySQL
      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "root";
 
      // Contraseña del usuario
      $contrasena = "";
 
      // Nombre de la base de datos
      $baseDeDatos ="academico";
 
      // Nombre de la tabla a trabajar
      $tabla = "estudiantes";
 
      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
         if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
         { 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }
         else
         {
            echo "Listo, estamos conectados.<br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }
         else
         {
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
      return $link; 
      } 
 
      $link = Conectarse();
 
      if($_POST)
      {
        // $queryInsert = "INSERT INTO $tabla (nombre, apellidos) VALUES ('".$_POST['nombreForm']."', '".$_POST['apellidoForm']."');";

         $queryInsert  = "INSERT into estudiante (id, Codigo, nombres, apellidos, FechaNacimiento, telefono,email, apodo) VALUES ('".$_POST['id']."','".$_POST['Codigo']."','".$_POST['nombreForm']."','".$_POST['apellidoForm']."', ''".$_POST['FechaNacimiento']."','".$_POST['telefono']."','".$_POST['email']."','".$_POST['apodo']."')";

   $result = mysqli_query('$sql','$queryInsert');
 
         $resultInsert = mysqli_query($link, $queryInsert); 
 
         if($resultInsert)
         {
            echo "<strong>Se ingresaron los registros con exito</strong>. <br>";
         }
         else
         {
            echo "No se ingresaron los registros. <br>";
         }
 
      }
 
      $query = "SELECT nombre, apellidos FROM $tabla;";
 
      $result = mysqli_query($link, $query); 
 
      ?>
 
      <table>
         <tr>
            <td>id</td>
            <td>codigo</td>
            <td>Nombres</td>
         <td>Apellidos</td> 
         <td>FechaNacimiento</td> 
         <td>email</td> 
         <td>telefono</td> 
         <td>Apodo</td> 
            <tr>
 
      <?php
 
      while($row = mysqli_fetch_array($result))
      { 
         echo "<tr>";
         echo "<td>";
         echo $row["id"];
         echo "</td>";
         echo "<td>";
         echo $row["codigo"];
         echo "</td>";
         echo "<td>";
         echo $row["Nombre"];
         echo "</td>";
         echo "<td>";
         echo $row["Apellidos"];
         echo "</td>";
         echo "<td>";
         echo $row["Nacimiento"];
         echo "</td>";
         echo "<td>";
         echo $row["email"];
         echo "</td>";
         echo "<td>";
         echo $row["telefono"];
         echo "</td>";
         echo "<td>";
         echo $row["apodo"];
         echo "</td>";
         echo "</tr>";
 
      } 
 
      mysqli_free_result($result); 
 
      mysqli_close($link); 
 
      ?>
 
      </table>
      <hr>
      <form action="" method="post">
         ID: <input type="text" name="id"> <br> <br>
         Codigo: <input type="text" name="Codigo"> <br> <br>
         Nombre: <input type="text" name="nombreForm"> <br> <br>
         Apellidos: <input type="text" name="apellidoForm"> <br> <br>
         nacimiento: <input type="text" name="FechaNacimiento"> <br> <br>
         Email: <input type="text" name="email"> <br> <br>
         Telefono: <input type="text" name="telefono"> <br> <br>
         apodo: <input type="text" name="apodo"> <br> <br>
         <input type="submit" value="Guardar">
      </form>
 
      </body> 
      </html>