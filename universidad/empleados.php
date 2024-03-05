<?php 
    if(
        isset($_POST["cedula"]) 
        && isset($_POST["nombre"]) 
        && isset($_POST["fechadenacimiento"])
        && isset($_POST["sexo"])
        && isset($_POST["direccion"])
        && isset($_POST["celular"])
        && isset($_POST["email"])
        && isset($_POST["cargo"]))
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

        $conn = new PDO("mysql:host=localhost;dbname=aerolinea", $dbuser, $dbpassword);
        $dbuser = "";
        $dbpassword = "";
        $query = "INSERT INTO `empleados` (`id`, `cedula`, `nombre`, `fechadenacimiento`, `sexo`, `direccion`, `celular`, `email`, `cargo`) VALUES (NULL, '0223312', 'laura', '2010-03-05', 'femenino', 'calle 9 ', '3166414', 'laura', 'directora ');";
        ;";
        $q =  $conn->prepare($query);
        $result = $q->execute();
    }
?>
<h1>Registro de pasajeros</h1>
<hr/>
<form action="" method="post">
    Nombre: <input type="text" name="nombre"> <br>
    Documento: <input type="text" name="documento"> <br>
    Usuario: <input type="text" name="usuario"><br>
    Password: <input type="password" name="password">
    <hr>
    <input type="submit" value="Registrarme">
</form>