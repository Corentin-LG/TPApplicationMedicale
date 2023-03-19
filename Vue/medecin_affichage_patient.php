<?php
require('header_generique_secretaire.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Consulter patients
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">

                            <form>

                                <table>
                                    <thead>
                                        <tr>
                                            <th>Id_Patient</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Sexe</th>
                                            <th>Adresse</th>
                                            <th>Ville</th>
                                            <th>Département</th>
                                            <th>Date de naissance</th>
                                            <th>Situation familiale</th>
                                            <th>Affiliation mutuelle</th>
                                            <th>Date de création du dossier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $Util = new Util();
                                        $Utilisateur = $Util->getUtilisateurById($_SESSION["ID_CONNECTED_USER"]);
                                        $Medecin = new Medecin();
                                        $Medecin = $Utilisateur->getMedecin();
                                        $Medecin->setId_Medecin($_SESSION["ID_CONNECTED_USER"]);
                                        //$result = $Medecin->searchAllConsultationPatientOfMedic($Medecin->getId_Medecin());
                                        $result = $Util->searchAllConsultationPatientOfMedic($Medecin->getId_Medecin());
                                        
                                        
                                        
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    </html>
<?php
require('footer_generique_secretaire.php');
?>