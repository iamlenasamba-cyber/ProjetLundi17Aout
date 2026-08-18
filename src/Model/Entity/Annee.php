<?php

class Annee{
    private int $id;
    private string $annee;
    private int $actif;
    private array $inscription;
    
    function __construct(array $inscription=[],?int $id=null,string $annee='',int $actif=0){
        $this->id=$id;
        $this->actif=$actif;
        $this->inscription=$inscription;
        $this->annee=$annee;
    }

    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id=$id;
    }

    public function getAnnee(){
        return $this->annee;
    }
    public function setAnnee(string $annee){
        $this->annee=$annee;
    }

     public function getActif(){
        return $this->actif;
    }
    public function setActif(int $actif){
        $this->actif=$actif;
    }

     public function getInscription(){
        return $this->inscription;
    }

}


   
