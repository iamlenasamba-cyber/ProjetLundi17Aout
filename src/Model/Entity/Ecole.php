<?php

class Ecole{
    private ?int $id;
    private string $nomEcole;

    public function __construct(?int $id=null,string $nomEcole=''){
        $this->id=$id;
        $this->nomEcole=$nomEcole;
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
    

}