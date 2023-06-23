<?php

Class Database{
    private string  $host;
    private string  $database;
    private string  $username;
    private string  $password;
    private $conn;

    public function __construct($host, $database,  $username,  $password ){
        $this-> host= $host;
        $this-> database = $database;
        $this-> username = $username;
        $this-> password = $password;
      
    }

    public function connect(){
        $this-> conn= new mysqli($this-> host,   $this-> password ,  $this-> database) 


        if($this-> conn->conn_error){
            die("Erro in conection of database").$this->conn->connect_error;
        }
    }
public function query($sql){
  $results= $this-> conn-> query($sql);
  if(!result){
    die("error in acess sql:".$this->conn->error);
  }
  return $result;

}

public function close(){
    $this->conn->close();
}
 public function getError(){
    return $this-> error;
 }

 public function getLastInsertId(){
    return $this->conn->insert_id;
 }
}

?>