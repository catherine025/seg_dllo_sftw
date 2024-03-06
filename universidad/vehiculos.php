<?php 
    if(
        isset($_POST["placa"]) 
        && isset($_POST["color"]) 
        && isset($_POST["fechaderegistro"]))
    {
        $placa = $_POST["placa"];
        $color = $_POST["color"];
        $fechaderegistro = $_POST["fechaderegistro"];

        $dbuser = "root";
        $dbpassword = "";

        $conn = new PDO("mysql:host=localhost;dbname=universidad", $dbuser, $dbpassword);
        $dbuser = "";
        $dbpassword = "";
        $query = "INSERT INTO `usuarios` (`id`, `placa`, `color`, `fechaderegistro`) VALUES (NULL, '$placa', '$color', '$fechaderegistro');";
        $q =  $conn->prepare($query);
        $result = $q->execute();
    }


?>
<h1>Registro de Vehiculos </h1>
<hr/>
<form action="" method="post">
    Placa: <input type="text" name="placa"> <br>
    Color: <input type="text" name="color"> <br>
    Fecha der egistro: <input type="text" name="fechaderegistro"><br>
    <hr>
    <input type="submit" value="Registrarme">
</form>