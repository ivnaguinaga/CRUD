<?php 
include '../services/config.php';
include '../services/conexion.php';
include '../process/persona.php';
/*echo $pdo->exec("DELETE FROM tbl_persona WHERE id=1");
$stmt = $pdo->prepare("DELETE FROM tbl_persona WHERE id=?");
// Bind
$id = 5;

$stmt->bindParam(1, $id);
$stmt->execute();*/
$email=$_REQUEST['email'];
// $name=$_REQUEST['name'];
// $age=$_REQUEST['age'];
// $persona=new Persona($id,$name,$age);
$stmt = $pdo->prepare("DELETE FROM alumnos WHERE email=:email");
$stmt->bindParam(':email',$email);
$stmt -> execute();
header("Location:../view/ver.php");