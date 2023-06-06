<?php

class Admin extends User{
    protected $salaire;
    public function __construct($nom,$prenom,$email ,$profil,$salaire ){
        parent :: __construct($nom,$prenom,$email,$profil);
        $this->salaire=$salaire;   
    }
    public function getSalaire(){
        return $this->salaire;
    }
    public function setSalaire($salaire){
        $this->salaire=$salaire;
    }

}