<?php

/**Uso del patron singleton para mi conexion a mi base de datos */
class Singleton_Database_conexion
{
    private static $instancia;
    private $conexion;

    private function __construct()
    {
        self::$instancia = NULL;
    }
    public static function get_instance()
    {
        if (is_null(self::$instancia)) {
            self::$instancia = new Singleton_Database_conexion();
        }
        return self::$instancia;
    }

    public function conect_db()
    {
        try {
            $this->conexion = new PDO("mysql:host=localhost;dbname=POST", "root", "");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->exec("SET CHARACTER SET UTF8");
            echo "Conexion Exitosa";
            return $this->conexion;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public  function disconect()
    {
        $this->conexion = NULL;
    }

   
}


$objeto=Singleton_Database_conexion::get_instance();
$objeto->conect_db();

var_dump($objeto);