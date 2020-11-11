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
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="oep.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/5534c6ecc7.js" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
        <header>
             <a id="before" href="mdpp.php"> <i class="fas fa-arrow-left"></i></a>
            <h3>Orden de ejecución de los proyectos</h3>
        </header>
        <div id="todo">
            <div id="contedor">
                <table>
                    <tr>
                        <th>Prioridad</th>
                        <th>Proyecto</th>
                        <th>Costo</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>D</td>
                        <td>$60,000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>A</td>
                        <td>$30,000</td>
                    </tr>                    <tr>
                        <td>3</td>
                        <td>C</td>
                        <td>$10,000</td>
                    </tr>                    <tr>
                        <td>4</td>
                        <td>B</td>
                        <td>$30,000</td>
                    </tr>
                </table>
                <div class="button">
                    <input type="button" value="Guardar análisis">
                </div>
            </div>
        </div>
    </body>
</html>