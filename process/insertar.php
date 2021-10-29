<?php 
include '../services/config.php';
include '../services/conexion.php';
include '../process/persona.php';
/*$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (?, ?)");
// Bind
$name = "Peter";
$age = 30;
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $age);
// Excecute
$stmt->execute();*/
////
/*$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
// Bind
$nombre = "Charles";
$edad = 25;
$stmt->bindParam(':name', $nombre);
$stmt->bindParam(':age', $edad);
// Excecute
$stmt->execute();
*//*
$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
$name = "Luis";
$age = 35;
// Bind y execute: no funciona 
try{

if($stmt->execute(array(':name'=>$name, ':age'=>$age))){
    echo 'bien';
}else{ echo 'mal';}

}catch (PDOException $e) {
    echo 'mal';
   echo  $e->getMessage();
} */
/*$persona=new Persona("pepe",32);
$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
if($stmt->execute((array) $persona)){
    echo 'bien';
}else{ echo 'mal';}*/
$email=$_POST['email'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$persona=new Persona($email,$nombre,$apellido,$edad);
$stmt = $pdo->prepare("INSERT INTO alumnos(email, nombre, apellido, edad) VALUES (:email, :nombre, :apellido, :edad)" );
try{
    if($stmt->execute((array) $persona)){
        //echo 'bien';
        header("Location:../view/ver.php");
    }   
}catch (PDOException $e){
    //echo 'mal';
    echo $e->getMessage();
    header("Location:../view/ver.php");
}

