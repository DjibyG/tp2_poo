<?php
<class Bariment implements iGestion {
    protected $id;
    protected $nom;
    protected $descripe;
    protected $nbNooms;


    //construct

    //
    public function hydrate($row){
        $this->id = $row{"id"};
        $this->nom = $row{"nom"};
        $this->descripe = $row{"descripe"};
        $this->nbNooms = $row{"nbNooms"};

    }
    public function affichage()'
    echo "bat".$this ->id 
}