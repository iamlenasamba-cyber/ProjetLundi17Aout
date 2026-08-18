<?php


class InscriptionRepository{
    private Inscription $inscription;
    
    private function __construct(){}

    public static function getAllInscriptions(){
        $sql="SELECT e.prenom, e.nom, e.matricule,c.nomClasse,ec.nomEcole,r.nomResponsable, i.statut
            FROM 
            
        ";
    }

}