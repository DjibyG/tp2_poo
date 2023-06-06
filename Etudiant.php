<?php

class Etudiant extends User{
    protected $identifiant;
    public function __construct($nom,$prenom,$email ,$profil,$identifiant ){
        parent :: __construct($nom,$prenom,$email,$profil);
        $this->identifiant=$$identifiant;   
        //redéfinition
        $user -> 
    }
    public function getIdentifiant(){
        return $this->identifiant;
    }
    public function setIdentifiant($identifiant){
        $this->identifiant=$identifiant;
    }
    //constructeur
    public function ___construct($row=null)
}