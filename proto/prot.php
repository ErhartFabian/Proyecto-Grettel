<!-- PHP DATABASE CONECTION -->
<?php
$inpPlaneacion = $_POST['inpPlaneacion']; 
$inpAnalista = $_POST['inpAnalista'];
$inpFecha = $_POST['inpFecha'];

if (!empty($inpPlaneacion) || !empty($inpAnalista) || !empty($inpFecha)) {
    $servername = "localhost";
    $database = "bdportafolio";
    $username = "root";
    $password = "";
    //create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    $SELECT = "SELECT email From register Where email = ? Limit 1";
    $INSERT = "INSERT Into register (username, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";
    //Prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $stmt->store_result();
    $stmt->fetch();
    $rnum = $stmt->num_rows;
    if ($rnum==0) {
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssssii", $username, $password, $gender, $email, $phoneCode, $phone);
        $stmt->execute();
        echo "New record inserted sucessfully";
    } else {
        echo "Someone already register using this email";
    }
    $stmt->close();
    $conn->close();
    }
} 
else {
    echo "All field are required";
    die();
}


/*
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
    exit; 
} 
else {
    echo 'Se trono aqui';
}*/
?>?>?>?>?>?>?>?>