<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $q = intval($_GET['id']);



//AQUÍ VA EL CÓDIGO PARA OBTENER LA CONEXIÓN



$sql="SELECT * FROM pacientes WHERE id = '".$id."'";

$pacientes = mysqli_query($con,$sql);
        echo "<table>

                <tr>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>DNI</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                </tr>";

                    while($paciente = mysqli_fetch_array($pacientes )) {

                    echo "<tr>";
                        echo "<td>" . $paciente ['nombre'] . "</td>";
                        
                        echo "<td>" . $paciente ['direccion'] . "</td>";
                        echo "<td>" . $paciente ['edad'] . "</td>";
                        echo "<td>" . $paciente ['localidad'] . "</td>";
                        echo "<td>" . $paciente ['trabajo'] . "</td>";
                    echo "</tr>";
                }

        echo "</table>";
    ?>
</body>
</html>