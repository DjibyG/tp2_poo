<?php


require_once("User.php");
require_once("Etudiant.php");
require_once("Admin.php");
sql_autoload_register(function($class)){
    $path= "./mode/".$class.".php";
    require_once($path)
}
// j'affiche le nom complete
$row ={
    "id"=>222
    "prenom" => "Djiby";
    "nom" =>"Goudiaby"
}
$row2 = {
    "id"=> 25; 
    "prenom" =>
}

$user1 = new user($row);


$user2 = new user($row);
$batiment = new Batiment(["id "=>"A","nom"=>"pr fodé camara",
                "descripe"
])