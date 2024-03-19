<html>
    <head>
        <title>Búsqueda de Clientes</title>
    </head>
    <body>
        <h1>Buscar Cliente por Número de Cédula</h1>
        <form action="" method="GET">
        <strong> Digite la Cédula: </strong>
            <input type="text" name="cedula">
            
            <input type="submit" value="Buscar">

            <p> <input type="button" onclick="window.location.href='http://localhost/seg_dllo_sftw/andrewbikes/'" value="Regresar"> </p>

        </form>
        <?php 
            if(isset($_GET["cedula"])){
                $cedula = $_GET["cedula"];
                echo "Búsqueda por $cedula";

                $dbuser = "acastano";
                $dbpassword = "qWl)zRsnSs(cl6pg";
        
                $conn = new PDO("mysql:host=localhost;dbname=andrewbikes", $dbuser, $dbpassword);
                $consultaSQL = $conn->prepare("SELECT cedula, nombre, telefono, email FROM clientes WHERE cedula = '$cedula'");
                $consultaSQL->execute();
        ?>
        <table border="1">
      
            <tr>
                <th>
                    Cédula
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Teléfono
                </th>
                <th>
                    Email
                </th>
            </tr>
        <?php
                while ($row = $consultaSQL->fetch(PDO::FETCH_ASSOC)) {
        ?>

                <tr>
                    <td><?php echo $row["cedula"] ?></td>
                    <td><?php echo $row["nombre"] ?></td>
                    <td><?php echo $row["telefono"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                </tr>

        <?php
                }
            }
        ?>
        </table>
        <style> body {
    background-color: #63b2f852;
    }
    </style>
    </body>
</html>