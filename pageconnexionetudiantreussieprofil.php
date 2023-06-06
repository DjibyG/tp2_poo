<!DOCTYPE html>
<html>
	<head>
	<link href="pageconnexionetudiantreussi.css"  rel="stylesheet" >
	</head>
	<body>
<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: login.php");
		exit(); 
	}
?>
         <div id="entetenoir"> 
            <div id="ndimg">
                <img src="img/logoiam.jpg" width="300px" height="200">				
            </div> 
		<p id="bven">Bienvenue <?php echo $_SESSION['email']; ?>!</p>  
		  
		 <div id="exi" ><img src="img/exit.png" ></div> 
		 <a href="deconnexionetudiant.php" id="deco" >Déconnexion</a>
		 
		 
		 <div id="sleep" ><img src="img/sleep.png" ></div>
		 <a id="chambre" href="#">chambre</a> 
		 
		 
		 <div id="profil" ><img src="img/user.png" ></div>
		 <a id="lepro" href="pageconnexionetudiantreussieprofil.php">profil</a>  		
         </div>
        <div id="stimg">
            </div>
		
		<img src="img/image1.jpg" width=100%>
	</body>
</html>