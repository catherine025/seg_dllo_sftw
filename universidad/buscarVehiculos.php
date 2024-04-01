<html>
    <head>
        <title>Búsqueda de Vehiculos</title>
    </head>
    <body>
        <h1>Buscar Vehiculos por Numero de Placa</h1>
        <form action="" method="GET">
        <strong> Digite la Placa del Vehiculo: </strong>
            <input type="text" name="placa">
            
            <input type="submit" value="Buscar">

        </form>
        <?php 
            if(isset($_GET["placa"])){
                $placa = $_GET["placa"];
                echo "Búsqueda por $placa";

                $dbuser = "cathe";
                $dbpassword = "cathe1234";
        
                $conn = new PDO("mysql:host=localhost;dbname=universidad", $dbuser, $dbpassword);
                //$consultaSQL = $conn->prepare("SELECT placa, color, fechaderegistro FROM vehiculos WHERE placa = '$placa'");
                //$consultaSQL->execute();

                //Vulnerable a inyección SQL

                // $sentencia = "SELECT placa, color, fechaderegistro FROM vehiculos WHERE placa = '$placa'";
                // $consultaSQL = $conn->prepare($sentencia);
                // $consultaSQL->execute();

                //Seguro
                $sentencia = "SELECT placa, color, fechaderegistro FROM vehiculos WHERE placa = :placa;";
                $consultaSQL = $conn->prepare($sentencia);
                $consultaSQL->execute(array(
                    ':placa' => $placa,
                ));





        ?>

        <table border="1">
      
            <tr>
                <th>
                    Placa
                </th>
                <th>
                    Color
                </th>
                <th>
                    Fecha de Registro 
                </th>
            </tr>
        <?php
                while ($row = $consultaSQL->fetch(PDO::FETCH_ASSOC)) {
        ?>

                <tr>
                    <td><?php echo $row["placa"] ?></td>
                    <td><?php echo $row["color"] ?></td>
                    <td><?php echo $row["fechaderegistro"] ?></td>
                </tr>

        <?php
                }
            }
        ?>
        </table>

    </body>
</html>