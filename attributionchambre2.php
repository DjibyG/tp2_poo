<!DOCTYPE html>
<html>

<head>
    <title> Gestion chambre</title>
    <link href="pageadmin3.css" rel="stylesheet">

<body>
    <?php
    require('confi.php');
    $etudiant = $conn->query('SELECT * FROM etudiant where id = ' . $_SESSION['attribuer'])->fetch_all();
    $Chambres =   $conn->query('SELECT id FROM chambre')->fetch_all();
    if (isset($_POST['valider'])) {
        if (isset($_POST['selectchambre'])) {
            $conn->query('UPDATE etudiant SET chambre = ' . $_POST['selectchambre'] . ' WHERE id = ' . $etudiant[0][0]);
            echo "<script type='text/javascript'>
            alert('Chambre attribue');
            window.location.href = 'attributionchambre.php';
            </script>";
        }
    }

    ?>
    <a id="ret" href="attributionchambre.php">Retour</a>
    <center>

        <div id="Admin"> Administrateur</div>
        <br><br>
        <div id="AMS">
            <h4>Selectionner la chambre a donner a <?php echo $etudiant[0]['3'] . ' ' . $etudiant[0]['1'] ?></h4>
            <br>

            <form action="" method="post">

                <select name="selectchambre">
                    <option value="" selected>Id Chambre</option>
                    <?php foreach ($Chambres as $chambre) { ?>
                    <option value="<?php echo $chambre[0]; ?>">

                        <?php echo $chambre[0]; ?></option>
                    <?php  } ?>
                </select><br>
                <input type="submit" name="valider" value="Valider">
            </form><br>


        </div>
    </center>
</body>
</head>

</html>