
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "enterprise";

//la connexion
$con = new mysqli ($server, $user, $password, $db);
if(mysqli_connect_error()){
    echo "Echec de connexion";
    exit();
}

?>
