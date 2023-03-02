<?php

require('../Controller/Util.php');

session_start();

/*-- Verification si le formulaire d'authenfication a été bien saisie --*/
if ($_SESSION["acces"] != 'y') {
    /*-- Redirection vers la page d'authentification --*/
    header("location:index.php");
} else {
    $Util = new Util();
    $Utilisateur = $Util->getUtilisateurById($_SESSION["ID_CONNECTED_USER"]);
    $Secretaire = new Secretaire();
    $Secretaire = $Utilisateur->getSecretaire();
}


?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php

        echo $Secretaire->getNom_Secretaire() . ' ' . $Secretaire->getPrenom_Secretaire();
        ?>
    </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="js/jquery/css/ui-lightness/jquery-ui-1.9.2.custom.css" type="text/css" />
    <link rel="shortcut icon" href="bootstrap/img/brain_icon_2.ico" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div id="content" class="span9">
                <div class="main_body">

                    <div class="Home-Header">
                        <div class="Slogan">

                        </div>
                        <div class="Contact-Research">

                        </div>
                        <div class="Logo">

                        </div>
                    </div>
                    <div class="Horizontal-menu">
                        <center>
                            <h4>
                                <?php
                                echo $Secretaire->getNom_Secretaire() . ' ' . $Secretaire->getPrenom_Secretaire();
                                ?>
                            </h4>
                        </center>
                    </div>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Ajouter un nouveau rendez-vous
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">
                            <form action="../Controller/ajout_rendez_vous_bdd.php" method="post">
                                <br />
                                <label>Date :</label>
                                <input class="textfield_form" type="text" name="Date_Rendez_Vous" size="50" /><br />
                                <label>N° de salle :</label>
                                <input class="textfield_form" type="text" name="Salle_Rendez_Vous" size="50" /><br />
                                <label>ID du patient :</label>
                                <select name="Id_Patient" class="form-control">
                                    <?php
                                    require('../Controller/DatabaseFunctions.php.php');
                                    $patients = getAllPatients();
                                    foreach ($patients as $patient) {
                                        echo '<option value="' . $patient['Id_Patient'] . '">' . $patient['Nom_Patient'] . ' ' . $patient['Prenom_Patient'] . '</option>';
                                    }
                                    ?>
                                </select>

                                <label>ID du médecin :</label>
                                <select name="Id_Medecin" class="form-control">
                                    <?php
                                    $Util = new Util();
                                    $Util->dbConnection();

                                    $query = "SELECT Id_Medecin, Nom_Medecin, Prenom_Medecin FROM medecin";
                                    $result = mysqli_query($Util->mysqli, $query);

                                    if ($Util->mysqli->connect_error) {
                                        die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
                                    }

                                    $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                    foreach ($patients as $patient) {
                                        echo '<option value="' . $patient['Id_Medecin'] . '">' . $patient['Nom_Medecin'] . ' ' . $patient['Prenom_Medecin'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <br /><br />
                                <input type="reset" name="effacer" value="Effacer" />
                                <input type="submit" name="valider" value="Ajouter" />
                            </form>
                        </div>
                    </div>
                    <div class="Right-body">
                        <div class="About-us">
                            <div class="Social-NW-body">
                                <a href="affichage_patient.php"><i class="icon-user"></i> Liste des patients</a>
                                <br />
                                <a href="afficher_un_patient.php"><i class="icon-search"></i> Chercher un patient</a>
                                <hr />
                                <a href="#"><i class="icon-calendar"></i> Liste des rendez-vous</a>
                                <hr />
                                <a href="ajout_rendez_vous.php"><i class="icon-plus-sign"></i> Ajouter un rendez-vous</a>
                                <br />
                                <a href="ajout_patient.php"><i class="icon-plus"></i> Nouvelle fiche patient</a>
                                <hr />
                                <a href="../Controller/deconnexion.php"><i class="icon-off"></i> Se d&eacute;connecter</a>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="footer">
                    &COPY; Cabinet Médical 2021
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>



</html>