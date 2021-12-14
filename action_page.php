<!DOCTYPE html>
<html lang="en">
<head>
      <title>REGISTRO</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="No pierdas el tiempo y registrate ahora mismo!!" />
        <meta name="keywords" content="Remis,Registro,Equipo"/>
        <meta name="author" content="Grupo 6" />
        
        <link rel="shortcut icon" href="imagenes/logoremis.png">
      
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Nunito:wght@200&family=Open+Sans&family=Rampart+One&display=swap" rel="stylesheet">
       
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body>
        <p> <a href="/index.html">Volver a Remis Ya</a> </p>

        <div id="mensaje"></div>

        <?php

        $email= $_POST ["email"];
        $contraseña = $_POST ["contraseña"];
        $usuario = $_POST ["usuario"];
        $telefono = $_POST ["telefono"];
        $fecha = $_POST ["fecha-de-nacimiento"];
        $barrio = $_POST ["direccion"];
        $direccion = $_POST ["barrio"];

        print " <p>Su nombre es <strong>$email</strong>.</p> \n ";
        print " \n";
        print " <p>Su telefono es <strong>$contraseña</strong>.</p> \n ";
        print " \n";
        print " <p>Su telefono es <strong>$usuario</strong>.</p> \n ";
        print " \n";
        print " <p>Su dni, su usuario y su nueva contraseña es <strong>$telefono</strong>.</p> \n ";
        print " \n";
        print " <p>Su fecha de nacimiento es <strong>$date</strong>.</p> \n ";
        print " \n";
        print " <p>El barrio donde usted reside es <strong>$direccion</strong>.</p> \n ";
        print " \n";
        print " <p>Su domicilio es <strong>$barrio</strong>.</p> \n ";
        print " \n";


        include ["datosBD.php"];
        $con = new mysqli ($host, $usuario, $clave, $basededatos) or die ("No se ha podido conectar al servidor de Base de Datos");
        if (!$con)
        {
            die ("Conexión fallida: " . mysqli_connect_error());
        }

        $db = mysqli_select_db ($conn, $basededatos) or die ("No se pudo conectar a la base de datos");
        $consulta = "INSERT INTO infousuario (email,contraseña,usuario, telefono, fecha-de-nacimiento, direccion,barrio) VALUES ($email,$contraseña,$usuario, $telefono, $fecha, $direccion,$barrio)";

        if (mysqli_query ($con, $consulta))
        {
            echo "<p>Registro agregado.</p>";
        }else
        {
            echo "<p>No se agrego nuevo registro</p>";
            echo "Error: " . $consulta . "<br>" . mysqli_error ($con);
        }
        mysqli_close ($con);

        ?>




</body>
</html>