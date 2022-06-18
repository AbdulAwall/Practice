<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

// $database = "test"; 
// $username = "localhost";
// $password = "";


$conn = new mySqli('localhost', 'root','','test');
if($conn->connect_error) {
    die('Connection Failed :'.$conn->connect_error);
} else {
    $stmt = $conn->prepare ("insert into registration(firstName, lastName)
    values(?,?)");
    $stmt->bind_param("ss", $firstName, $lastName);
    $stmt->execute();
    echo "Registration Sucssesfully";
    $stmt->close();
    $conn->close();
}

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
exit ('Could not connect');
}

?>
