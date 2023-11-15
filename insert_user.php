<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$pos = $_POST['pos'];
$edad = $_POST['edad'];
$est = $_POST['est'];
$p = $_POST['p'];
$nac = $_POST['nac'];
$ap = $_POST['ap'];
$sub = $_POST['sub'];
$a = $_POST['a'];
$ga = $_POST['ga'];
$a2 = $_POST['a2'];
$fc = $_POST['fc'];
$fs = $_POST['fs'];
$ta = $_POST['ta'];
$tr = $_POST['tr'];

$sql = "INSERT INTO jugadores (name, pos, edad, est, p , nac, ap, sub, a, ga, a2, fc, fs, ta, tr) VALUES ('$name', '$pos', '$edad', '$est', '$p','$nac',  '$ap', '$sub', '$a', '$ga', '$a2','$fc',  '$fs', '$ta', '$tr')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
} else {
    // Manejar el error si es necesario
}

?>
