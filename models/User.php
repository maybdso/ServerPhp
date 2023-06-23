<?php
Class User{
    private int id;
    private string name;
    private string email;
   private string senha ;

   public function __construct($id, $name, $email, $senha){
    $this->id =$id ;
    $this->name =$name ;
    $this-> email=$email ;
    $this-> senha= $senha;
   }

public function getid(){
    return $this->id;
}
 public function setid($id){
    $this-> id = $id;
 }


 public function getname(){
    return $this->name;
}
 public function setname($name){
    $this-> name = $name;
 }


 public function getemail(){
    return $this->email;
}
 public function setid($email){
    $this-> email = $email;
 }


 public function getsenha(){
    return $this->senha;
}
 public function setid($senha){
    $this-> senha = $senha;
 }

}


?>