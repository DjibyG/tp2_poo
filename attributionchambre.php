<!DOCTYPE html>
<html>

<head>
    <title> Gestion chambre</title>
    <link href="pageadmin3.css" rel="stylesheet">

<body>
    <?php
    require('confi.php');
    $etudiant = $conn->query('SELECT * FROM etudiant where Chambre = 0')->fetch_all();
    if (isset($_POST['attribuer'])) {
        $_SESSION['attribuer'] = $_POST['attribuer'];
        header('Location: attributionchambre2.php');
    }

    ?>
    <a id="ret" href="pageadmin3.php">Retour</a>
    <center>

        <div id="Admin"> Administrateur</div>
        <br><br>
        <div id="AMS">
            <h4>Etudiant sans chambre </h4>
            <table border="1px">
                <thead>
                    <td>
                        Prenom et nom
                    </td>
                    <td>
                        Ajouter
                    </td>
                </thead>

                <?php foreach ($etudiant as $student) { ?>
                <tr>
                    <td>
                        <?php echo $student['3'] . ' ' . $student['1'] ?>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button value="<?php echo $student['0']; ?>" name="attribuer">Attribuer</button>
                        </form>
                    </td>
                </tr>
                <?php  } ?>

            </table>
        </div>
    </center>
</body>
</head>

</html>