<?php 
   require_once"conexion.php";
 ?>
<html>
<body>
  
   <form method="post" action="guardar.php">
   id             :<input type="Text" name="id"><br>
   Codigo         :<input type="Text" name="Codigo"><br>
   Nombre         :<input type="Text" name="nombres"><br>
   Apellidos      :<input type="Text" name="apellidos"><br>
   Nacimiento     :<input type="Text" name="fechaNacimiento"><br>
   E-mail         :<input type="Text" name="email"><br>
   telefono       :<input type="Text" name="telefono"><br>
   Apodo          :<input type="Text" name="apodo"><br>
   <input type="Submit" name="enviar" value="Aceptar información">
   </form> 

<?php 
   

   // process form
if($enviar){

                                    

   $sql = "INSERT INTO estudiante VALUES('id','Codigo','nombres','apellidos', 'fechaNacimiento', 'telefono'.'email', 'apodo')";
   $result = mysqli_query('$conn', '$sql');
   echo "¡Gracias! Hemos recibido sus datos.\n"; 
}
Else{ echo("error no se pudo agregar datos");}
?> 
  
<?php 

?> 

</body>
</html> 