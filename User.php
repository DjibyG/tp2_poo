<?php

class User {
    protected $nom;
    protected $prenom;
    protected $email;
    protected $profil;
    public function __construct($nom, $prenom,$email,$profil){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->profil=$profil;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getProfil(){
        return $this->profil;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setProfil($profil){
        $this->profil=$profil;
    }
    public function __construct($row=null){
        if($row!=null){
            $this ->hydrate($row);
        }
    }
    //redefinition 
    public function hydrate ($row){
        $this ->ID = $row["id"];
        $this ->prenom = $row["prenom"];
        $this ->nom = $row["nom"];

    public function restauration(){

    }

    }
    public function affichage(){
        echo "user".$this-> ID."".$this ->prenom."".$this ->nom;
    }
    //guetter
    public function getnom(){
        return $this ->nom
    }
}