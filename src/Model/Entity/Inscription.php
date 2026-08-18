<?php

class Inscription {
    private int $id;
    private ?Classe $classe;
    private ?Eleve $eleve;
    private ?Annee $annee;
    private ?Ecole $ecole;
    private ?Responsable $responsable;

    function __construct (?int $id=null,?Classe $classe=null,?Eleve $eleve=null,?Annee $annee=null,?Responsable $responsable=null){
        $this->classe=$classe;
        $this->eleve=$eleve;
        $this->annee=$annee;
        $this->responsable=$responsable;
        $this->id=$id;
    }
     public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id=$id;
    }



}
