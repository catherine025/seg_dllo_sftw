<html>
    <head>
        <title>Busqueda de vuelos por destino</title>
    <head>
    <body>
        <h1>Busqueda de vuelos por destino</h1>
        <from action="" method="GET">
            Destino a buscar:
            <input type="text" name="destino">
            <input type="submit value="Buscar">
        </from>
        <?php
            if(isset($_GET["destino"])){
                $destino = $_GET["destino"];
                echo "Busqueda por $destino";

                $dbuser = "root";
                $dbpassword = "";
                
                $conn = new PDO("mysql:host=localhost;dbname=aerolinea", $dbuser, $dbpassword);
                $consultaSQL = $conn->prepare("SELECT origen, destino, aerolinea FROM vuelos WHERE destino = '$destino'");
                $consultaSQL->execute();

                //Vulnerable a inyección SQL
                // $sentencia = "SELECT origen, destino, aerolinea FROM vuelos WHERE destino = '$destino'";
                // $consultaSQL = $conn->prepare($sentencia);
                // $consultaSQL->execute();


                // Codigo Seguro
                // $sentencia = "SELECT origen, destino, aerolinea FROM vuelos WHERE destino = :destino;";

                // $consultaSQL = $conn->prepare($sentencia);

                // $consultaSQL->execute(array(
                //     ':destino' => $destino,
                // ));
                

        ?>
        <table border="1">
            <tr>
                <th>
                    origen
                </th>
                <th>
                    Destino
                </th>
                <th>
                    Aeroline
                </th>
            </tr>
        <?php
                while ()                
            }

            <!-- <select name="destino">
                <option value="manizales">Manizales</option>
                <option value="pereira">Pereira</option>
                <option value="cartagena">Cartagena</option>
                <option value="bogota">Bogota</option>
                <option value="medellin">Medellin</option>
 
