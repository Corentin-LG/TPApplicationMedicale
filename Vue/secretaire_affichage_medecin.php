<?php
require('header_generique_secretaire.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Consulter médecins
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">

                            <form action="../Controller/secretaire_affichage_medecin.php" method="get">

                                <table id="table1">
                                    <thead>
                                        <tr>
                                            <th>Id_Patient</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                    $tableauMedecin = $Util->getAllMedecin();
                                    foreach ($tableauMedecin as $unMedecin) {
                                        echo "<tr>";
                                        echo "<td>" . $unMedecin->getId_Medecin() . "</td>";
                                        echo "<td>" . $unMedecin->getNom_Medecin() . "</td>";
                                        echo "<td>" . $unMedecin->getPrenom_Medecin() . "</td>";
                                        echo "</tr>";
                                    }
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