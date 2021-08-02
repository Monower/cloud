<?php 

class database{
    private $servername="localhost";
    private $username="root";
    private $password="";
    private $dbname="cloud";
    protected $conn;


    public function open()
    {
        $conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);

        if ($conn->connect_error) {
            echo "connection error".$conn->connect_error;
        }
        else{
            //echo "connection with database successful";
        }

        return $conn;
    }


}

$obj1= new database();







?>