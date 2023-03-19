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

                            <form action="../Controller/secretaire_affichage_patient_bdd.php" method="get">

                                <table id="table1">
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
                                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <tr>
                                                <td><?php echo $row['Id_Patient']; ?></td>
                                                <td><?php echo $row['Nom_Patient']; ?></td>
                                                <td><?php echo $row['Prenom_Patient']; ?></td>
                                                <td><?php echo $row['Sexe_Patient']; ?></td>
                                                <td><?php echo $row['Adresse_Patient']; ?></td>
                                                <td><?php echo $row['Ville_Patient']; ?></td>
                                                <td><?php echo $row['Departement_Patient']; ?></td>
                                                <td><?php echo $row['Date_Naissance_Patient']; ?></td>
                                                <td><?php echo $row['Situation_Familiale_Patient']; ?></td>
                                                <td><?php echo $row['Affiliation_Mutuelle']; ?></td>
                                                <td><?php echo $row['Date_Creation_Dossier']; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    </html>
<?php
require('footer_generique_secretaire.php');
?>