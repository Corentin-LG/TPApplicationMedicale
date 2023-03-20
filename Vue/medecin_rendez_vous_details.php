<?php
require('header_generique_medecin.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Détails du patient
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID Rendez-Vous</th>
                                        <th>Date</th>
                                        <th>Salle</th>
                                        <th>ID Patient</th>
                                        <th>ID Médecin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $Date_Rendez_Vous = $_POST["Date_Rendez_Vous"];
                                    $tableauRDV = $Util->searchRendez_VousByDate($Date_Rendez_Vous);
                                    foreach ($tableauRDV as $RDV) {
                                        echo "<tr>";
                                        echo "<td>" . $RDV->getId_Rendez_Vous() . "</td>";
                                        echo "<td>" . $RDV->getDate_Rendez_Vous() . "</td>";
                                        echo "<td>" . $RDV->getSalle_Rendez_Vous() . "</td>";
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