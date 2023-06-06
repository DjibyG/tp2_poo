<!DOCTYPE html>
<html>
    <head>
        <title>Gestion Chambre</title>
        <link href="ajoutchambre.css" rel="stylesheet">
        
        <body>
        <?php
         require('confi.php');
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: login.php");
		exit(); 
	}
        
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
          echo'<h3> ajout etudiant reussie </h3>';
          echo' <h3>remplir le formulaire pour ajouter un autre etudiant </h3>';
        }
    }
    
?>
    
        <div id="entetenoir"> 
            <div id="ndimg">
                <img src="img/logoiam.jpg" width="300px" height="200">

            </div>
			<h1 id="messbv">Bienvenue <?php echo $_SESSION['email']; ?>!</h1>
            <p id="txt3">Administrateur</p>
            <a link href="pageconnexionadminreussie.php"> <button id="retour">  retour </button></a>
    
        </div>
        
            
            
        <form action="" method="POST"> 
            <br> <br>
            <fieldset>
                <legend>Ajout etudiant</legend>
            </fieldset><br><br>
                  
             
              
                 <label>Identifiant(Adresse mail):</label>
                <input type="email" name="email" required><br><br>
              
                <label>Prenom:</label>
                <input type="text" name="prenom" required><br><br>
              
                <label>Nom:</label>
                <input type="text" name="nom" required><br><br>
                <label>date de naissance:</label>
                <input type="date" name="date_de_naissance" required><br><br>
                <label>mot de passe:</label>
                <input type="password" name="mot_de_passe" required><br><br>
                

                <button type="submit" name="ajoutet" > Ajouter </button>
              
            </form> 
              
              
        </body>
    </head>
</html>