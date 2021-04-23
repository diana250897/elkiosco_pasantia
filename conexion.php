<?php

class conexion{
    
    const user='root';
    const pass='';
    const db='servidoriot';
    const servidor='localhost';
    
    public function conectarbd(){
        $conectar= new mysqli(self::servidor, self::user, self::pass, self::db);
         if($conectar->connect_error){
            die("Error de conexión".$conectar->connect_error);
        }
         return $conectar;
    }
}
?>