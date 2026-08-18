<?php

class Database{
    private static ?PDO $pdo;

    private function __construct(){}

    public static function getConnexion(){
        try {
            $db="pgsql:host=localhost; port=5432; dbname=projetlundi17";
            self::$pdo= new PDO($db,'lena','Sokhnadiouf6',[
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
            ]);
            
        } catch (PDOException $e) {
            throw new Exception("Erreur de connexion".$e->getMessage());
            
        }
        return self::$pdo;
    }
}