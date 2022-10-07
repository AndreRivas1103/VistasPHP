<?php
    require '../consultas/conn.php';
    $asignatura = $_POST['Lugar'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Resultados</title>
</head>
<body class="body2">
    <h2 class="title1">Profesores</h2>
    <p class="relleno2">Tuki :D</p> 
    <br>
    <center><table border="1" class="table1">
        <tr>
            <td><b class="tuki idk">Materia</b></td>
            <td><b class="tuki idk">Nombre Profesor</b></td>
            <td><b class="tuki idk">Lugar</b></td>
        </tr>
        <?php
            $sql = "SELECT * FROM tukicitasv2.profesores_disponibles WHERE Lugar LIKE '%".$asignatura."%'";
            $result = MYSQLI_QUERY($xcon, $sql);
            while($datos = MYSQLI_FETCH_ASSOC($result)){
                echo "<tr>
                        <td><center><b>".$datos["Lugar"]."</b></center></td>
                        <td><center><b>".$datos["Nombre_Profesor"]."</b></center></td>
                        <td><center><b>".$datos["Materia"]."</b></center></td>


                    </tr>";
            }
        ?>
    </table></center>
    <br>
    <buttom class="zzz75"><a href="../index.php">Volver</a></buttom>
<?php
    mysqli_close($xcon);
?>
</body>
</html>