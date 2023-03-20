<?php
require('header_generique_medecin.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Détails de la consultation
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID Consultation</th>
                                        <th>Date</th>
                                        <th>Compte rendu</th>
                                        <th>ID Patient</th>
                                        <th>ID Médecin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $Date_Rendez_Vous = $_POST["Date_Consultation"];
                                    $tableauRDV = $Util->searchConsultationByDate($Date_Rendez_Vous);
                                    foreach ($tableauRDV as $RDV) {
                                        echo "<tr>";
                                        echo "<td>" . $RDV->getId_Consultation() . "</td>";
                                        echo "<td>" . $RDV->getDate_Consultation() . "</td>";
                                        echo "<td>" . $RDV->getCompte_Rendu_Consultation() . "</td>";
                                        echo "<td>" . $RDV->getId_Patient() . "</td>";
                                        echo "<td>" . $RDV->getId_Medecin() . "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    </html>
<?php
require('footer_generique_medecin.php');
?>