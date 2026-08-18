<?php

class Type {
    private ?int $id;
    private string $nomType;
    private array $transaction;

    function __construct (?int $id=null, string $nomType='',array $transaction=[] ){
        $this->transaction=$transaction;
        $this->nomType=$nomType;
        $this->id=$id;
    }
    
     public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id=$id;
    }

    public function getNomType(){
        return $this->nomType;
    }
    public function setNomType(string $nomType){
        $this->nomType=$nomType;
    }

    public function getTransaction(){
        return $this->transaction;
    }

}
