<html>
    <head>
        <title>Búsqueda de Empleados según el Sexo</title>
    </head>
    <body>
        <h1>Buscar Cliente Empleados según el Sexo</h1>
        <form action="" method="GET">
        <strong> Digite el Sexo: </strong>
            <input type="text" name="sexo">
            
            <input type="submit" value="Buscar">

        </form>
        <?php 
            if(isset($_GET["sexo"])){
                $sexo = $_GET["sexo"];
                echo "Búsqueda por $sexo";

                $dbuser = "cathe";
                $dbpassword = "cathe1234";
        
                $conn = new PDO("mysql:host=localhost;dbname=universidad", $dbuser, $dbpassword);
                //$consultaSQL = $conn->prepare("SELECT sexo, nombre, fechadenacimiento, cargo FROM empleados WHERE sexo = '$sexo'");
                //$consultaSQL->execute();

                //Vulnerable a inyección SQL

                // $sentencia = "SELECT sexo, nombre, fechadenacimiento, cargo FROM empleados WHERE sexo = '$sexo'";
                // $consultaSQL = $conn->prepare($sentencia);
                // $consultaSQL->execute();

                //Seguro
                $sentencia = "SELECT sexo, nombre, fechadenacimiento, cargo FROM empleados WHERE sexo = :sexo;";

                $consultaSQL = $conn->prepare($sentencia);
                $consultaSQL->execute(array(
                      ':sexo' => $sexo,
                  ));

                // masculino' UNION SELECT 'dummy xxx' as sexo, nombre as nombre, cedula as fechadenacimiento, celular as cargo FROM estudiantes; 


        // 




        ?>

        <table border="1">
      
            <tr>
                <th>
                    Sexo
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Fecha de Nacimiento
                </th>
                <th>
                    Cargo
                </th>
            </tr>
        <?php
                while ($row = $consultaSQL->fetch(PDO::FETCH_ASSOC)) {
        ?>

                <tr>
                    <td><?php echo $row["sexo"] ?></td>
                    <td><?php echo $row["nombre"] ?></td>
                    <td><?php echo $row["fechadenacimiento"] ?></td>
                    <td><?php echo $row["cargo"] ?></td>
                </tr>

        <?php
                }
            }
        ?>
        </table>

    </body>
</html>