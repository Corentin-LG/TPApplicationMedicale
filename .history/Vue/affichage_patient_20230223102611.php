<?php

   require('../Controller/Util.php');
   
   
   session_start();

    /*-- Verification si le formulaire d'authenfication a été bien saisie --*/
   if($_SESSION["acces"]!='y')
   {
            /*-- Redirection vers la page d'authentification --*/
           header("location:index.php");
   }
   else{
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
                    
                    echo $Secretaire->getNom_Secretaire().' '.$Secretaire->getPrenom_Secretaire();
               ?>
        </title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="js/jquery/css/ui-lightness/jquery-ui-1.9.2.custom.css" type="text/css" />
        <link rel="shortcut icon" href="bootstrap/img/brain_icon_2.ico"/>
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
                                        echo $Secretaire->getNom_Secretaire().' '.$Secretaire->getPrenom_Secretaire();
                                   ?>
                                </h4>
                            </center>
                        </div>
                        <div class="Left-body">
                            <div class="Left-body-head">
                                Afficher les patients
                            </div>
                            <div class="infos">
                                
                            </div>
                            <div class="en_bref">
                                <form action="../Controller/affichage_patient_bdd.php" method="get">
                                    <table>
                                        <tr>
                                            <td>
                                                <label for="Id_Patient">Id_Patient</label>
                                            </td>
                                            <td>
                                                <input type="text" name="Id_Patient" id="Id_Patient" placeholder="Id_Patient" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="Nom_Patient">Nom_Patient</label>
                                            </td>
                                            <td>
                                                <input type="text" name="Nom_Patient" id="Nom_Patient" placeholder="Nom_Patient" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="Prenom_Patient">Prenom_Patient</label>
                                            </td>
                                            <td>
                                                <input type="text" name="Prenom_Patient" id="Prenom_Patient" placeholder="Prenom_Patient" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="Date_Naissance_Patient">Date_Naissance_Patient</label>
                                            </td>
                                            <td>
                                                <input type="text" name="Date_Naissance_Patient" id="Date_Naissance_Patient" placeholder="Date_Naissance_Patient" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="Sexe_Patient">Sexe_Patient</label>
                                            </td>
                                            <td>
                                                <input type="text" name="Sexe_Patient" id="Sexe_Patient" placeholder="Sexe_Patient" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="Adresse_Patient">Adresse_Patient</label>
                                            </td>
                                            <td>
                                                <input type="text" name="Adresse_Patient" id="Adresse_Patient" placeholder="Adresse_Patient" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="Telephone_Patient">Telephone_Patient</label>
                                            </td>
                                            <td>
                                                <input type="text" name="Telephone_Patient" id="Telephone_Patient" placeholder="Telephone_Patient" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="Email_Patient">Email_Patient</label>
                                            </td>
                                            <td>
                                                <input type="text" name="Email_Patient" id="Email_Patient" placeholder="Email_Patient" required/>
                                            </td>
                                        </tr>
                                </form>
                            </div>
                            
                            
                        </div>
                    <div class="Right-body">
                        <div class="About-us">
                            <div class="Social-NW-head">
                                
                            </div>
                            <div class="Social-NW-body">
                                
                                <a href="affichage_patient.php"><i class="icon-user"></i> Liste des patients</a>
                                <br/>
                                <a href="#"><i class="icon-calendar"></i> Liste des rendez-vous</a>
                                <hr/>
                                <a href="ajout_rendez_vous.php"><i class="icon-plus-sign"></i> Ajouter un rendez-vous</a>
                                <br/>
                                <a href="ajout_patient.php"><i class="icon-plus"></i> Nouvelle fiche patient</a>
                                <hr/>
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
