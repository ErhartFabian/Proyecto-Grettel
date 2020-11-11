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
    <link rel="stylesheet" href="prot.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5534c6ecc7.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <h3>Gestión del portafolio</h3>
        <a id="next" href="vc.php"> <i class="fas fa-arrow-right"></i></a>
        
    </header>
    <div id="todo">
        <form id="contenedor">
            <div class="form" method="GET">
                <h3>
                    PLANEACIÓN
                </h3>
                <input type = "texto" name="inpPlaneacion">
                <?php
                    
                ?>
            </div>
            <div class="form">
                <h3>
                    Analista
                </h3>
                <input type = "texto" name="inpAnalista">
            </div>
            <div class="form">
                <h3>
                    Fecha
                </h3>
                <input type = "date" name="inpFecha">
            </div>
        </form>
    </div>
</body>

</html>