<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = '127.0.0.1';
        $this->db       = 'bd_medalla';
        $this->user     = 'root';
        $this->password = "";
        //$this->password = "6#vWHD_$";
        $this->charset  = 'utf8mb4';
    }

    //mysql -e "USE todolistdb; select*from todolist" --user=azure --password=6#vWHD_$ --port=49175 --bind-address=52.176.6.0

    function connect(){
    
        try{

            
            $connection = "mysql:host=".$this->host.";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            //$pdo = new PDO($connection, $this->user, $this->password, $options);
            $pdo = new PDO($connection,$this->user,$this->password);
        
            return $pdo;


        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}



/*

CREATE TABLE `Libreria_productos`.`Categorias` ( `id` INT NOT NULL AUTO_INCREMENT , `Categoria` VARCHAR(60) NOT NULL , `Imagen` VARCHAR(60) NULL DEFAULT NULL , `Otros` VARCHAR(60) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
*/


?>