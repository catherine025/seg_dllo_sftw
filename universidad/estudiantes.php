<?php 
    if(
        isset($_POST["cedula"]) 
        && isset($_POST["nombre"]) 
        && isset($_POST["fechadenacimiento"])
        && isset($_POST["sexo"])
        && isset($_POST["direccion"])
        && isset($_POST["celular"])
        && isset($_POST["email"]))
    {
        $cedula = $_POST["cedula"];
        $nombre = $_POST["nombre"];
        $fechadenacimiento = $_POST["fechadenacimiento"];
        $sexo = $_POST["sexo"];
        $direccion = $_POST["direccion"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];

        $dbuser = "cathe";
        $dbpassword = "cathe1234";

        $conn = new PDO("mysql:host=localhost;dbname=universidad", $dbuser, $dbpassword);
        $dbuser = "";
        $dbpassword = "";
        $query = "INSERT INTO `estudiantes` (`id`, `cedula`, `nombre`, `fechadenacimiento`, `sexo`, `direccion`, `celular`, `email`) VALUES (NULL, '$cedula', '$nombre', '$fechadenacimiento', '$sexo', '$direccion', '$celular', '$email');";
        $q =  $conn->prepare($query);
        $result = $q->execute();
    }
?>
<h1>Registro de Estudiantes</h1>
<hr/>
<form action="" method="post">

    Cedula : <input type="text" name="cedula"> <br>
    Nombre: <input type="text" name="nombre"> <br>
    Fecha de Nacimiento: <input type="text" name="fechadenacimiento"><br>
    Sexo: <input type="text" name="sexo"><br>
    Dirección: <input type="text" name="direccion"><br>
    Celular: <input type="text" name="celular"><br>
    Email: <input type="text" name="email"><br>

    <hr>
    <input type="submit" value="Registrarme">
</form>