<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title></title>
        <link href="pageinscriptionetudiant.css" rel="stylesheet">
    </head>
    <body>
    <?php
require('confi.php');

if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['date_de_naissance'], $_REQUEST['mot_de_passe'] )){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$nom = stripslashes($_REQUEST['nom']);
	$nom = mysqli_real_escape_string($conn, $nom); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$prenom = stripslashes($_REQUEST['prenom']);
	$prenom = mysqli_real_escape_string($conn, $prenom);
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$date = stripslashes($_REQUEST['date_de_naissance']);
	$date = mysqli_real_escape_string($conn, $date);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$mot_de_passe = stripslashes($_REQUEST['mot_de_passe']);
	$mot_de_passe = mysqli_real_escape_string($conn, $mot_de_passe);

  
	
	$query = "INSERT into `etudiant` ( nom, prenom,email, date_de_naissance , mot_de_passe)
				VALUES ('$nom', '$prenom','$email','$date', '".hash('sha256', $mot_de_passe)."')";
	$res = mysqli_query($conn, $query);

    if($res){
      header('location:pageinscriptionreussie.php');
    }
}
?>
        
         <div style="position:absolute;top:60px; width:1280px ;font-size: 25px ; ">

         <center>
                <form action="" method="post">
                <div> INSCRIPTION</div>
            <br>
            <label>Nom:</label>
                <input type="text" name="nom" required autocomplete="off"><br><br>
              
                <label>Prénom:</label>
                <input type="text" name="prenom" required autocomplete="off"><br><br>

                <label>adresse mail:</label>
                <input type="email" name="email" required autocomplete="off"><br><br>
              
                <label>Date de Naissance:</label>
                <input type="date" name="date_de_naissance" required autocomplete="off"><br><br>              
                <label>Mot De Passe:</label>
                <input type="password" name="mot_de_passe" required autocomplete="off"><br><br>
                
                <button type="submit" name="submit" id="inscrire" > S'inscrire </button>
                </form>
         </center>     
          </div>
            <div> <img src="img/image1.jpg" width=100%  height=600 >  </div>
            <?php  ?>
    </body>

</html>