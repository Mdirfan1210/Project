<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "academic";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    #echo "Connection is set alright";
}
else{
    #echo "Connection is not alright";
}

?>