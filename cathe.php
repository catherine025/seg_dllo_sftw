<html>
    
    <head>
        <title>Iniciar Sesión en Facebook</title>
    </head>
    
    <body>
        
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
        <form action="http://localhost/seg_dllo_sftw/ocathe.php" method="post">
            
            
            <strong> Usuario: </strong> <input type="text" name="usuario"> <br>
            <strong> Password: </strong> <input type="password" name="clave"> <br>
            <strong> Fecha de Nacimiento: </strong> <input type="date" name="birthday" min="1900-01-01" max="2025-01-01" > <br>
            <strong> Sexo: </strong>Masculino<input type="checkbox" name="sexo" id="masculino" value="opc1"> Femenino <input type="checkbox" name="sexo" id="femenino" value="opc2" > <br>
            
            
          <input type="submit" value="Login"> 

        </form>

       
    </body>
    
        <style> body {
        background-color: 7922F9;
        }
        </style>



</html>