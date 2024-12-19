<?php
include "config.php";

$name=$_POST["name"];
$postnom=$_POST["postnom"];
$email=$_POST["email"];
$password=$_POST["password"];
$password=md5($password);
$number=$_POST["number"];


//sql part
$sql="INSERT INTO users(name,postnom,email,password,number) VALUES('$name','$postnom','$email','$password','$number')";

if ($con->query($sql)===true) {
    echo"Enregistre avec succes";
}else{
    echo "Erreur: " ;
}
$con->close();
?>
