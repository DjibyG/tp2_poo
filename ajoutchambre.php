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
        
    if (isset( $_REQUEST['nom_chambre'], $_REQUEST['numero_chambre'], $_REQUEST['date_expiration'],$_REQUEST['numero_batiment'] )){
        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
        $nom = stripslashes($_REQUEST['nom_chambre']);
        $nom = mysqli_real_escape_string($conn, $nom); 
        // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
        $numero_chambre = stripslashes($_REQUEST['numero_chambre']);
        $numero_chambre = mysqli_real_escape_string($conn, $numero_chambre);
      // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
        $date = stripslashes($_REQUEST['date_expiration']);
        $date = mysqli_real_escape_string($conn, $date);
        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
        $numero_batiment = stripslashes($_REQUEST['numero_batiment']);
        $numero_batiment = mysqli_real_escape_string($conn, $numero_batiment);
    
      
        
        $query = "INSERT into `chambre` ( nom_chambre, numero_chambre,numero_batiment, date_expiration )
                    VALUES ('$nom', '$numero_chambre','$numero_batiment', '$date')";
        $res = mysqli_query($conn, $query);
    
        if($res){
          echo'<h3> ajout chambre reussie </h3>';
          echo' <h3>remplir le formulaire pour ajouter une autre chambre </h3>';
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
        
            
            <form>
            <br> <br>
            <fieldset>
                <legend>Ajout de chambre d'etudiant</legend>
            </fieldset><br><br>
                           
                <label>Nom de la chambre:</label>
                <input type="text" name="nom_chambre" required><br><br>
                <label>Numero Chambre:</label>
                <input type="number" name="numero_chambre" required><br><br>
                <label>Numero Batiment:</label>
                <input type="number" name="numero_batiment" required><br><br>
                <label>Date d'expiration:</label>
                <input type="datetime-local" name="date_expiration" required><br><br>

                <button type="submit" name="ajoutch" >Ajouter</button>
              
           </form>
              
        </body>
    </head>
</html>