<?php

class Usuario{
    
    private $id;
    private $nUsuario;
    private $email;
    private $password;
    private $created_at;

    public function __construct($id, $nUsuario, $email, $password, $created_at){

        $this->id=$id;
        $this->nUsuario=$nUsuario;
        $this->email=$email;
        $this->password=$password;
        $this->created_at=$created_at;

    }

    // GETTERS
    public function getId(){
        return $this->id;
    }

    public function getNUsuario(){
        return $this->nUsuario;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getCreatedAt(){
        return $this->created_at;
    }


    // SETTERS
    public function setId($id){
        $this->id=$id;
    }

    public function setNUsuario($nUsuario){
        $this->nUsuario=$nUsuario;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function setCreatedAt($created_at){
        $this->created_at=$created_at;
    }

}