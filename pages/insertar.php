<?php 
$conn = mysqli_connect("localhost", "root", "", "academico");
if(!empty($_POST))
{
 $output = '';
    
$output = '';
    $nombres = mysqli_real_escape_string($conn, $_POST["nombres"]);
    $paterno = mysqli_real_escape_string($conn, $_POST["paterno"]);
    $materno = mysqli_real_escape_string($conn, $_POST["materno"]);
    $DNI = mysqli_real_escape_string($conn, $_POST["nroDoc"]);
    $direccion = mysqli_real_escape_string($conn, $_POST["direccion"]);
    $genero = mysqli_real_escape_string($conn, $_POST["genero"]);      
    $telefono = mysqli_real_escape_string($conn, $_POST["telefono"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);  
    $fechaNacimiento = $_POST["fechaNacimiento"];    
    $fechaNacimientos = date('Y-m-d',strtotime($fechaNacimiento));  
    $query = " INSERT INTO estudiant (DNI,paterno,materno,nombres,genero,email,telefono,fechaNacimiento)
     VALUES('$DNI','$paterno','$materno','$nombres','$genero','$email','$telefono','$fechaNacimientos')";


    if(mysqli_query($conn, $query))
    {
     $output.= '<label class="text-success">Registro Insertado Correctamente</label>';
     
}
?>