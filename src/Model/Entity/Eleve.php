<?php


class Eleve{
    private ?int $id;
    private string $nom;
    private string $prenom;
    private string $matricule;
    private string $date;

    public function __construct(?int $id=null,string $nom='',string $prenom='',string $matricule='',string $date=''){
        $this->nom=$nom;
        $this->id=$id;
        $this->prenom=$prenom;
        $this->matricule=$matricule;
        $this->date=$date;
    }

    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id=$id;
    }

    public function getNom(){
        return $this->nom;
    }
    public function setNom(string $nom){
        $this->nom=$nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom(string $prenom){
        $this->prenom=$prenom;
    }

    public function getMatricule(){
        return $this->matricule;
    }
    public function setMatricule(string $matricule){
        $this->matricule=$matricule;
    }

    public function getDate(){
        return $this->date;
    }
    public function setDate(string $date){
        $this->date=$date;
    }
    

}

