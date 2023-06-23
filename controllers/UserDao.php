<?php

Class UserDao implements Dao{
    private $db;
    public function __construct(database $db){
        $this-> db= $db;
    }


    public function create($data){
        $nome=$data['name'];
        $email=$data['email'];
        $senha=$data['password'];

        $sql="INSERT INTO user(name, email, password)" VALUES('$nome', 'email', 'senha')
        $this-.db-> query($sql);
        $id= $this-> db->getLastInsertId();
        $this->db->close();

        if($result){
            return new User($id,$nome, $email,$senha);
        }

        else{
            die("error in create new user")
        }
    }


    
    public function read(){
        $sql="SELECT *FROM user";
        $this-> db->conect();
        $result= $this-> db-> query ($sql);

        $users=array();
        if($result && $result-> num_rows>0){
            while($row=$results-> fetch_assoc()){
                $user= new User($row['id'],$row['name'], $row['email'], $row['password']);
                $users[]=$user;
            }
        }
        $this-> db-> close();
        return $users;
    }


    public function update($id, $data){
        $nome=$data["name"];
        $email=$data['email'];
        $sql="UPDATE user SET name='$nome', email='$email' WHERE id=$id";
        $this-> db->conect();
        $result=$this->db->query($sql);
        $this->db ->close();
        
        return $result;
    }


    public function delete($id){
        $sql="DELETE FROM user WHERE id=$id";
        $this-> db->conect();
        $result=$this->db->query($sql);
        $this->db ->close();

        return $result;
    }

}

?>
