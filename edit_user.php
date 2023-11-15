<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];

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

$sql = "UPDATE jugadores SET name='$name', pos='$pos', edad='$edad', est='$est', p='$p', nac='$nac', ap='$ap', sub='$sub', a='$a', ga='$ga', a2='$a2', fc='$fc', fs='$fs', ta='$ta', tr='$tr' WHERE id='$id'";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>