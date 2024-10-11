<?php

class Persona {

    private $nombre;
    private $edad;
    private $peso;
    private $altura;
    private $tiene_mascota = false;
}

class Service {
    private $database_name = 'cursoArquitectura';
    private $database_pass = 123456;
    private $database_user = 'Test';
    private $database_host = 'localhost';

    public function conectarBase  ($database_host, $database_name, $database_pass, $database_user){
       return  $link = mysqli_connect($database_host,$database_user, $database_pass, $database_name);
    }

    public function executeDatabase($sql){
        
        $mysqli = $this->conectarBase( $this->$database_host, $this->$database_name, $this->$database_pass, $this->$database_user );
        return $result = mysqli_execute_query($mysqli, $sql, null);
    }
}

$juan = new Persona();