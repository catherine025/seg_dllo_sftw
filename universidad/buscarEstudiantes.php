<html>
    <head>
        <title>Búsqueda de Estudiantes</title>
    </head>
    <body>
        <h1>Buscar Estudiantes por email</h1>
        <form action="" method="GET">
        <strong> Digite el Email: </strong>
            <input type="text" name="email">
            
            <input type="submit" value="Buscar">

        </form>
        <?php 
            if(isset($_GET["email"])){
                $email = $_GET["email"];
                echo "Búsqueda por $email";

                $dbuser = "cathe";
                $dbpassword = "cathe1234";
        
                $conn = new PDO("mysql:host=localhost;dbname=universidad", $dbuser, $dbpassword);
                //$consultaSQL = $conn->prepare("SELECT email, cedula, nombre, direccion, celular FROM estudiantes WHERE email = '$email'");
                //$consultaSQL->execute();

                //Vulnerable a inyección SQL

                // $sentencia = "SELECT email, cedula, nombre, direccion, celular FROM estudiantes WHERE email = '$email'";
                // $consultaSQL = $conn->prepare($sentencia);
                // $consultaSQL->execute();

                //Seguro
                $sentencia = "SELECT email, cedula, nombre, direccion, celular FROM estudiantes WHERE email = :email;";

                $consultaSQL = $conn->prepare($sentencia);
                $consultaSQL->execute(array(
                      ':email' => $email,
                  ));

//aarias@umanizales.edu.co' UNION SELECT 'dummy xxx' as email, sexo as cedula, nombre as nombre, fechadenacimiento as email, cargo as celular FROM empleados;                 

        ?>

        <table border="1">
      
            <tr>
                <th>
                    Email
                </th>
                <th>
                    Cedula
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Dirección
                </th>
                <th>
                    Celular
                </th>
            </tr>
        <?php
                while ($row = $consultaSQL->fetch(PDO::FETCH_ASSOC)) {
        ?>

                <tr>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["cedula"] ?></td>
                    <td><?php echo $row["nombre"] ?></td>
                    <td><?php echo $row["direccion"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                </tr>

        <?php
                }
            }
        ?>
        </table>

    </body>
</html>