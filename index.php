<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Vistas Tuki Citas</title>
    </head>
    <nav>
        <a href="primera/vista1.php">Permiso Estudiantes</a>
        <a href="segunda/vista2.php">Disponibilidad Profesor</a>
    </nav>
    <body class="body1">
        <h1 class="title1">Prueba Vistas</h1>
        <p class="relleno">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis
            lorem vitae nulla viverra rhoncus. Proin consequat eros et justo 
            interdum, eget semper sem luctus. Phasellus consectetur ac neque 
            id cursus. Sed risus nibh, condimentum nec tellus eget, feugiat 
            vehicula velit. Morbi at luctus sapien. Phasellus vel diam condimetum
            augue aliquet euismod at sed erat. Quisque lobortis imperdiet nisl, 
            sit amet tristique magna pellentesque id. Morbi venenatis sodales 
            dolor eget rutrum. Suspendisse porta porta vestibulum. Vivamus in ligula 
            finibus, fringilla dui vitae, placerat est. Sed imperdiet massa in erat 
            euismod, vel cursus nibh convallis.
            <br><br>
            Quisque commodo gravida felis, et cursus eros malesuada faucibus. Donec 
            ut hendrerit metus, vel sagittis nisi. Ut iaculis, dui sit amet dictum tempor, 
            metus quam porta lacus, elementum tristique nisl turpis at mauris. 
            Pellentesque vulputate efficitur nibh sed auctor. Vestibulum tincidunt 
            ut velit et ornare. Etiam sit amet metus luctus sem feugiat auctor sit amet 
            sed mi. Mauris sit amet mi vitae sapien ultricies vulputate. Praesent accumsan 
            in justo quis maximus. Suspendisse at nisl id ex consequat rutrum vitae eget 
            velit. Quisque non lobortis purus. Proin nec volutpat risus, sed aliquam neque. 
            Aenean eu felis nec urna dapibus congue. Sed commodo ex ac nulla euismod, et 
            commodo tortor sodales. Quisque consequat pellentesque ligula, eu maximus ante 
            vulputate quis.
        </p>
        <center><h2 class="zzz3">Consulta Estudiantes</h2></center>
        <form name="form1" action="resultadoConsulta.php" method="post">
            <center><table>
                <tr>
                    <td class="zzz2">Ingrese el codigo del estudiante:</td>
                    <td><input class="zzz" type="number" name="idestudiantes" size="10" placeholder="Codigo Estudiantil" required></td>
                </tr>

                    <td colspan="2"><br><center><input type="submit" name="btnConsultar" value="Consultar"></center></td>
                </tr>
            </table></center>
        </form>
    </body>
</html>