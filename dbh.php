<?php
// try{

//     $dbh = new PDO('mysql:host=localhost;dbname=student', 'root', '');
//     print "Successfully connected";

// }
// catch(PDOExcception $e){
//      print "connection faild ".$e->getMessage()."<br>";
//      die();
// }
class DB
{
    private $HOST;
    private $DB_NAME;
    private $USER;
    private $PASSWORD;

    public function connect()
    {
        $this->HOST = "localhost";
        $this->DB_NAME = "student";
        $this->USER = "root";
        $this->PASSWORD = "";
        try{
            $dbh = new PDO("mysql:host=$this->HOST;dbname=$this->DB_NAME", $this->USER, $this->PASSWORD);
            return $dbh;
        }
        catch(PDOException $e){
            return "connnection Faild ".$e->getMessage()."<br>";
        }
    }

}
