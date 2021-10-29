<?php 
class Persona{
   public $email; 
   public $nombre;
   public $apellido;
   public $edad;
   public function __construct($email,$nombre,$apellido,$edad){
      $this->email=$email;
      $this->nombre=$nombre;
      $this->apellido=$apellido;
      $this->edad=$edad;
   }

}