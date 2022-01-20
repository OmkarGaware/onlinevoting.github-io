<?php

$servername = "localhost";
$username ="root";
$password ="";
$database ="voting";



$conn = new mysqli($servername, $username, $password, $database);

if($conn){
    echo "connected!";
}
else{
    echo "Not Connected!";
}

?>