<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
else{
echo "Connected successfully";
}

// Check if the form is submitted 
if ( isset( $_POST['submit'] ) ) { 
    // retrieve the form data by using the element's name attributes value as key 
    $inpPlaneacion = $_POST['inpPlaneacion']; 
    $inpAnalista = $_POST['inpAnalista'];
    $inpFecha = $_POST['inpFecha'];
    // display the results
    echo '<h3>Form POST Method</h3>'; 
    echo 'Planeacion: ' . $inpPlaneacion . ' analista: ' . $inpAnalista . ' fecha: ' . $inpFecha;   
    $query = mysqli_query($conn,"INSERT INTO ALINEACION (nom_analista,fecha_creacion) VALUES ('$inpAnalista','$inpFecha')");
    if($query)
    {echo "si se inserto";}
    else{echo "no se inserto";}
} 
else {
    echo 'Se trono aqui';
}
?>