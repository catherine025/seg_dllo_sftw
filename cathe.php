<html>
<!-- Mensaje en la pestaña del navegador -->    
    <head>
        <title>Iniciar Sesión en Facebook</title>
    </head>
    
    <body>
<!-- Validación de datos del usuario // variables y validación de datos ingresados-->        
        <?php 
            if(isset($_POST['usuario']) && isset($_POST['clave'])){

                $usuario = $_POST['usuario'];
                $clave = $_POST['clave'];
                if($usuario == 'cathe'){
                    if($clave == 'Cathe123'){
                        echo "<h1>Bienvenido a Facebook!!!</h1>";
                    }
                    else {
                        echo "Nombre de usuario o contraseña incorrectos";
                    }
                }
                else {
                    echo "Nombre de usuario o contraseña incorrectos";
                }
            }
        ?>
        <h1>Inicia sesión en Facebook</h1>

        <!-- pagina una vez se hace un login exitoso -->

        <form action="http://localhost/seg_dllo_sftw/cathe.php" method="post">
            
            <!-- Campos para el ingreso de los datos // strong: texto en negrita // br: salto -->
            <strong> Usuario: </strong> <input type="text" name="usuario"> <br>
            <strong> Password: </strong> <input type="password" name="clave"> <br>
            <strong> Fecha de Nacimiento: </strong> <input type="date" name="birthday" min="1900-01-01" max="2025-01-01" > <br>
            <strong> Sexo: </strong>Masculino<input type="checkbox" name="sexo" id="masculino" value="opc1"> Femenino <input type="checkbox" name="sexo" id="femenino" value="opc2" > <br>
            
            <!-- Boton de login -->
          <input type="submit" value="Login"> 

        </form>

       
    </body>
    <!-- color de fondo de la pagina -->
        <style> body {
        background-color: 7922F9;
        }
        </style>

</html>