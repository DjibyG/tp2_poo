
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="/ProjetFinalPHP/Etudiant/pageconnexionetudiant.css" rel="stylesheet">
    </head>
    <body>
    <?php
require('confi.php');
session_start();

if (isset($_POST['email'])){
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	$_SESSION['email'] = $email;
	$mot_de_passe = stripslashes($_REQUEST['mot_de_passe']);
	$mot_de_passe = mysqli_real_escape_string($conn, $mot_de_passe);
    $query = "SELECT * FROM `etudiant` WHERE email='$email' and mot_de_passe='".hash('sha256', $mot_de_passe)."'";
	$result = mysqli_query($conn,$query) or die('Impossible de se connecter au serveur MySQL');
	
	if (mysqli_num_rows($result) == 1) {
		$user = mysqli_fetch_assoc($result);
		// vérifier si l'utilisateur est un administrateur ou un utilisateur
		
			header('location: ../Etudiant/pageconnexionetudiantreussie.php');
		
	}else{
		echo "<script>alert(\"Verifiez bien vos identifiants\")</script>";
	}
}
?>

       

        <div id="entetenoir"> 
            <div id="ndimg">
                <img src="img/logoiam.jpg" width="300px" height="200">

            </div>
            <p id="txt3">Vous n’avez pas de compte ?</p>
            <a link href="../index.php"> <button id="retour">  Accueil </button></a>
            <button id="creer">
                <a href="pageinscriptionetudiant.php" id="link1"> Créer un compte</a>
            </button>
        </div>
       
        <div id="stimg">
            <div id="formula">

            </div>
            <div> 
                <form action="" method="post" id="formula" >
                    <div id="connect">
                        <p id="txt2">
                            Connectez-Vous
                        </p>

                    </div>
                    <div>
                        <input type="email" id="mail" name="email" placeholder="             azerty12@example.com">
                    </div>
                    <div>
                        <input type="password" id="mdp" name="mot_de_passe" placeholder="        votre_mot_de_passe" ></input>
                    </div>
                    <div>
                        <button type="submit" id="seconnect" name="se connecter"  >     se connecter </button>
        
                    </div>
                    <?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
     <?php } ?>
                </form>
            </div>
            <img src="img/image.png" width=100%>

        </div>


    </body>

</html>