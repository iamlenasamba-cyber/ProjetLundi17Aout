<?php

class Ecole{
    private ?int $id;
    private string $nomEcole;
    private array $inscription;

    public function __construct(?int $id=null,string $nomEcole='',array $inscription=[]){
        $this->id=$id;
        $this->nomEcole=$nomEcole;
        $this->inscription=$inscription;
    }
  public  function getId(){
        return $this->id;
    }
  public  function setId(){
        $this->id=$id;
    }

   public function setNomEcole(string $nomEcole){
        $this->nomEcole=$nomEcole;
    }
   public function getNomEcole(){
        return $this->nomEcole;
    }
    public function getInscription(){
        return $this->inscription;
    }

}




