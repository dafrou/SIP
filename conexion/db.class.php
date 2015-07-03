<?php

/* Clase encargada de gestionar las conexiones a la base de datos */
Class Db{

    private $servidor;
    private $usuario;
    private $password;
    private $base_datos;
    private $link;
    private $stmt;
    private $array;

    static $_instance;

    /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
    private function __construct(){
        $this->setConexion();
        $this->conectar();
    }

    /*Método para establecer los parámetros de la conexión*/
    private function setConexion(){
        $conf = Conf::getInstance();
        $this->servidor=$conf->getHostDB();
        $this->base_datos=$conf->getDB();
        $this->usuario=$conf->getUserDB();
        $this->password=$conf->getPassDB();
    }

    /*Evitamos el clonaje del objeto. Patrón Singleton*/
    private function __clone(){ }

    /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos*/
    public static function getInstance(){
        if (!(self::$_instance instanceof self)){
            self::$_instance=new self();
        }
        return self::$_instance;
    }

    /*Realiza la conexión a la base de datos.*/
    private function conectar(){
        $this->link=mysqli_connect($this->servidor, $this->usuario, $this->password, $this->base_datos);
        mysqli_select_db($this->link,$this->base_datos);
        @mysql_query("SET NAMES 'utf8'");
    }

    /*Método para ejecutar una sentencia sql*/
    public function ejecutar($sql){
        $this->stmt=mysqli_query($this->link,$sql);
        return $this->stmt;
    }

    /*Método para obtener una fila de resultados de la sentencia sql*/
    public function obtener_fila($stmt,$fila){
        if ($fila==0){
            $this->array=mysql_fetch_array($stmt);
        }else{
            mysql_data_seek($stmt,$fila);
            $this->array=mysql_fetch_array($stmt);
        }
        return $this->array;
    }

    public function obt_filas($stmt,$fila){
        if ($fila==0){
            $this->array=mysqli_fetch_assoc($stmt);
        }else{
            mysql_data_seek($stmt,$fila);
            $this->array=mysqli_fetch_assoc($stmt);
        }
        return $this->array;
    }

    //Devuelve el último id del insert introducido
    public function lastID(){
        return mysqli_insert_id($this->link);
    }
    //Contar numero de registros devueltos
    public function count($stmt)
    {
        return mysqli_num_rows($stmt);
    }
    //Login
    public function login($usuario, $password, $bd)
    {
        $respuesta = false;
        $sql = "select Correo, Contrasena from administrador where Correo = '".$usuario."' and Contrasena = '".$password."';";
        $stmt = $bd->ejecutar($sql);
        $cant = $bd->count($stmt);
        echo $sql;
        if($cant > 0){
            if($cant == 1){
                while ($x=$bd->obtener_fila($stmt,0)){
                    $respuesta['Correo'] = $x['Correo'];
                }
            }
        }
        return $respuesta;
    }
    public function delete($tabla, $dato,$id){
        $sql = "DELETE FROM ".$tabla." WHERE ".$dato." = ".$id;
        $stmt = $bd->ejecutar($sql);
        return $stmt;
    }

}