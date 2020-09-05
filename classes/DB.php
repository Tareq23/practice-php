
<?php

class DB
{

    private $dbh;
    private static $_connect = null;

    public function __construct()
    {
        try{
            $this->_dbh = new PDO("mysql:host=localhost;dbname=student", 'root', '');
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public static function connect()
    {
        if($this->_connect==null)
        {
            $this->_connect = new DB();
        }
        return $this->_connect;
    }
    public function createTable($tableName,$fields=array())
    {   
    //    $sql =  "create table is exists {$tableName}(
    //         id = int auto_increment,
    //     )";
    }
}