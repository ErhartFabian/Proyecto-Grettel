<!-- PHP DATABASE CONECTION -->
<?php
$servername = "localhost";
$database = "bdportafolio";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mdpp.css"> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/5534c6ecc7.js" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>

    <body>
        <header>
            <a id="before" href="avcp.php"> <i class="fas fa-arrow-left"></i> </a>
            <h3>Matriz de decisión con ponderación y peso</h3>
            <a id="next" href="oep.php"> <i class="fas fa-arrow-right"></i> </a>
        </header>
        <div id="todo">    
            <div id="contenedor">
                <table>
                    <tr>
                        <th>Criterio</th>
                        <th>Ponderación</th>
                        <th>Proyecto N </th>
                    </tr>
                    <tr>
                        <td>Duración</td>
                        <td>Valor n</td>
                        <td>Valor n</td>
                    </tr>
                    <tr>
                        <td>Valor presente neto</td>
                        <td>Valor n</td>
                        <td>Valor n</td>
                    </tr>
                    <tr>
                        <td>Período de recuperación de la inversión</td>
                        <td>Valor n</td>
                        <td>Valor n</td>
                    </tr>
                    <tr>
                        <td>Riesgo</td>
                        <td>Valor n</td>
                        <td>Valor n</td>
                    </tr>
                    <tr>
                        <td>Generación de tecnología propietaria</td>
                        <td>Valor n</td>
                        <td>Valor n</td>
                    </tr>
                    <tr class="resaltado">
                        <td> </td>
                        <td>Total</td>
                        <td>Valor total n</td>
                    </tr>
                    <tr class="resaltado">
                        <td> </td>
                        <td>Prioridad</td>
                        <td>Prioridad valor n</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="button">
            <input type="button" value="Ordenar Proyectos">
        </div>
    </body>

</html>