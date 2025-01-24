<?php

namespace app;

use PDO;
use PDOException;

class Connexion {

    private static $servername = "localhost"; 
    private static $username = "root"; 
    private static $password = ""; 
    private static $db = "Contactify";
    private static $connexion ; 
    private static $instance ; 
    public static $counter = 0 ; 


    public function __construct()
    {
        if (!self::$connexion)
        {
            try {
                self::$connexion = new PDO(
                    "mysql:host=" . self::$servername . 
                    ";dbname=" . self::$db . 
                    ";charset=UTF8",
                    self::$username,
                    self::$password
                );
                self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("connexion failed" . $e->getMessage());
            }
        }
    }

    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new Connexion();
            self::$counter ++ ; 
        }

        return self::$instance ; 
    } 

    public function getConnexion ()
    {
        return  self::$connexion; 
    }

}