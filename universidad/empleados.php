<?php 
    if(
        isset($_POST["cedula"]) 
        && isset($_POST["nombre"]) 
        && isset($_POST["fechadenacimiento"])
        && isset($_POST["sexo"])
        && isset($_POST["direccion"])
        && isset($_POST["celular"])
        && isset($_POST["email"])
        && isset($_POST["cargo"])
        )
        
    {
        $cedula = $_POST["cedula"];
        $nombre = $_POST["nombre"];
        $fechadenacimiento = $_POST["fechadenacimiento"];
        $sexo = $_POST["sexo"];
        $direccion = $_POST["direccion"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];
        $cargo = $_POST["cargo"];


        $dbuser = "root";
        $dbpassword = "";

         $conn = new PDO("mysql:host=localhost;dbname=universidad", $dbuser, $dbpassword);
         $dbuser = "";
         $dbpassword = "";
         $query = "INSERT INTO `empleados` (`id`, `cedula`, `nombre`, `fechadenacimiento`, `sexo`, `direccion`, `celular`, `email`, `cargo`) VALUES (NULL, '$cedula', '$nombre', '$fechadenacimiento', '$sexo', '$direccion', '$celular', '$correo', '$cargo');";
        
        $q =  $conn->prepare($query);
        $result = $q->execute();
    }


?>
<h1>Registro de pasajeros</h1>
<hr/>
<form action="" method="post">

    Cedula : <input type="text" name="cedula"> <br>
    Nombre: <input type="text" name="nombre"> <br>
    Fecha de Nacimiento: <input type="text" name="fechadenacimiento"><br>
    Sexo: <input type="text" name="sexo"><br>
    Dirección: <input type="text" name="direccion"><br>
    Celular: <input type="text" name="celular"><br>
    Email: <input type="text" name="email"><br>
    Cargo: <input type="text" name="cargo"><br>

    <hr>
    <input type="submit" value="Registrarme">

</form>