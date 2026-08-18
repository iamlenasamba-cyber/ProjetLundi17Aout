<?php

class Transaction{
    private int $id;
    private Inscription $inscription;
    private Type $type;

    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id=$id;
    }
    public function getInscription(){
        return $this->inscription;
    }
    public function setInscription(Inscription $inscription){
        $this->inscription=$inscription;
    }

    public function getType(){
        return $this->type;
    }
    public function setType(type $type){
        $this->type=$type;
    }

}