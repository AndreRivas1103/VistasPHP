<?php
    require 'consultas/conn.php';
    $idestudiantes = $_POST['idestudiantes'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resultados</title>
</head>
<body class="body2">
    <h2 class="title1">Listado Estudiantes Citas</h2>
    <p class="relleno2">Tuki :D</p> 
    <br>
    <center><table border="1" class="table1">
        <tr>
            <td><b>Codigo Estudiantes</b></td>
            <td><b>Nombre</b></td>
            <td><b>Apellido</b></td>
            <td><b>Lugar</b></td>
        </tr>
        <?php
            $sql = "SELECT * FROM tukicitasv2.citacionestudiante WHERE idestudiantes LIKE '%".$idestudiantes."%'";
            $result = MYSQLI_QUERY($xcon, $sql);
            while($datos = MYSQLI_FETCH_ASSOC($result)){
                echo "<tr>
                        <td><center><b>".$datos["idestudiantes"]."</b></center></td>
                        <td><center><b>".$datos["nombres"]."</b></center></td>
                        <td><center><b>".$datos["apellidos"]."</b></center></td>
                        <td><center><b>".$datos["lugar"]."</b></center></td>

                    </tr>";
            }
        ?>
    </table></center>
    <br>
    <buttom class="zzz75"><a href="index.php">Volver</a></buttom>
<?php
    mysqli_close($xcon);
?>
</body>
</html>