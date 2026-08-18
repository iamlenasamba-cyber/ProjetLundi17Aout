<?php

class Classe {
    private ?int $id;
    private string $nomClasse;
     private array $inscription;

    public function __construct(?int $id=null,string $nomClasse='',array $inscription=[]){
        $this->id=$id;
        $this->nomClasse=$nomClasse;
         $this->inscription=$inscription;
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
     public function getInscription(){
        return $this->inscription;
    }
}





 
