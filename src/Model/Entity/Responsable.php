<?php

class Responsable {
    private int $id;
    private string $nomResponsable;
    private string $numResponsable;
    private array $inscription;

    function __construct(?int $id=null, string $nomResponsable='', string $numResponsable='',array $inscription=[]){
        $this->id=$id;
        $this->nomResponsable=$nomResponsable;
        $this->numResponsable=$numResponsable;
        $this->inscription=$inscription;
    }

    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id=$id;
    }

    public function getNomResponsable(){
        return $this->nomResponsable;
    }
    public function setNomResponsable(string $nomResponsable){
        $this->nomResponsable=$nomResponsable;
    }


    public function getNumResponsable(){
        return $this->numResponsable;
    }
    public function setNumResponsable(string $numResponsable){
        $this->numResponsable=$numResponsable;
    }


    public function getInscription(){
        return $this->inscription;
    }
   
}
