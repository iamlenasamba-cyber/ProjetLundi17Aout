<?php

class Classe {
    private ?int $id;
    private string $nomClasse;

    public function __construct(?int $id=null,string $nomClasse=''){
        $this->id=$id;
        $this->nomClasse=$nomClasse;
    }
    public function getId(){
        return $this->id;
    }
     public function setId(){
        return $this->id;
    }

     public function getNomClasse(){
        return $this->nomClasse;
    }
     public function setNomClasse(string $nomClasse){
        $this->nomClasse=$nomClasse;
     }
}