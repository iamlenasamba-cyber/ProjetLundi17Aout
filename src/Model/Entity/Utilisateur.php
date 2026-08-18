<?php

class Utilisateur {
     private ?int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $password;
    private Role $role;

    public function __construct(?int $id=null,string $nom='',string $prenom='',string $email='',Role $role=null){
        $this->id=$id;
        $this->nomClasse=$nomClasse;
    }

    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id=$id;
    }

    public function getNom(){
        return $this->nom;
    }
    public function setNom(string $nom){
        $this->nom=$nom;
    }

     public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom(string $prenom){
        $this->prenom=$prenom;
    }

     public function getEmail(){
        return $this->email;
    }
    public function setEmail(string $email){
        $this->email=$email;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword(string $password){
        $this->password=$password;
    }

    
}