<?php

class Role {
    private int $id;
    private string $nomRole;
    private array $utilisateur;
    
    function __construct (?int $id=null, string $nomRole='',array $utilisateur=[] ){
        $this->utilisateur=$utilisateur;
        $this->nomRole=$nomRole;
        $this->id=$id;
    }
     public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id=$id;
    }
    public function getNomRole(){
        return $this->nomRole;
    }
    public function setNomRole(string $nomRole){
        $this->nomRole=$nomRole;
    }

    public function getUtilisateur(){
        return $this->utilisateur;
    }
   

}