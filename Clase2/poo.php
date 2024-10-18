<?php

class Persona {

    private $nombre;
    private $edad;
    private $peso;
    private $altura;
    private $tiene_mascota = false;
}

class Service {
    

    private function conectarBase  ($database_host, $database_name, $database_pass, $database_user){
       return  $link = mysqli_connect($database_host,$database_user, $database_pass, $database_name);
    }

    public function executeDatabase($sql){
        
        $mysqli = $this->conectarBase( 'cursoArquitectura', 123456, 'Test', 'localhost' );
        return $result = mysqli_execute_query($mysqli, $sql, null);
    }
}

$juan = new Persona();