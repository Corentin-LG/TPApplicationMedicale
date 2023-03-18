<?php


require('../Controller/Util.php');
// function getPatientByNom($Nom_Patient)
// {
//     $Util = new Util();
//     $Util->dbConnection();
//     $query = "SELECT * FROM patient WHERE Nom_Patient = '" . $Nom_Patient . "'";
//     $result = mysqli_query($Util->mysqli, $query);
//     if ($Util->mysqli->connect_error) {
//         die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
//     }
//     if ($result->num_rows > 0) {
//         $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
//         foreach ($patients as $patient) {
//             return $patient;
//         }
//     } else {
//         return "0 results";
//     }
// }

// $search = $_POST['search'];

// $servername = "localhost";
// $username = "bob";
// $password = "123456";
// $db = "classDB";

// $conn = new mysqli($servername, $username, $password, $db);

// if ($conn->connect_error){
// 	die("Connection failed: ". $conn->connect_error);
// }

// $sql = "select * from students where name like '%$search%'";

// $result = $conn->query($sql);

// if ($result->num_rows > 0){
// while($row = $result->fetch_assoc() ){
// 	echo $row["name"]."  ".$row["age"]."  ".$row["gender"]."<br>";
// }
// } else {
// 	echo "0 records";
// }

//$conn->close();
// function getNP (){
//     $Util = new Util();
//     $Util->dbConnection();
//     $query = "SELECT * FROM patient WHERE Nom_Patient = '" . $_POST['N_Patient'] . "'";
//     $result = mysqli_query($Util->mysqli, $query);
//     if ($Util->mysqli->connect_error) {
//         die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
//     }
//     if ($result->num_rows > 0) {
//         $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
//         foreach ($patients as $patient) {
//             return $patient;
//         }
//     } else {
//         return "0 results";
//     }
// }
// $N_Patient = $_POST['N_Patient'];

//     $Util = new Util();
//     $Util->dbConnection();
//     $query = "SELECT * FROM patient WHERE Nom_Patient = '" . $N_Patient . "'";
//     $result = mysqli_query($Util->mysqli, $query);
//     if ($Util->mysqli->connect_error) {
//         die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
//     }
//     if ($result->num_rows > 0) {
//         // $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
//         // foreach ($patients as $patient) {
//         //     return $patient;
//         // }

//         while($row = $result->fetch_assoc() ){
//             echo $row["Id_Patient"]."  ".$row["Nom_Patient"]."  ".$row["Prenom_Patient"]."<br>";
//         }

//     } else {
//         echo "0 results";
//     }


$Util = new Util();
if (isset($_POST["Nom_Patient"])) {
    
    $Util->dbConnection();

    $query = "SELECT * FROM patient WHERE Nom_Patient = '" . $_POST['Nom_Patient'] . "'";
    $result = mysqli_query($Util->mysqli, $query);

    if ($Util->mysqli->connect_error) {
        die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
    }

    else{
        if($Util->mysqli->query($Query) === TRUE) {
            header("location: ../Vue/secretaire_display.php");
            if ($result->num_rows > 0) {
                echo "<table>
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
                            <tbody>";
                $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach ($patients as $patient) {
                    echo '<tr><td>' . 
                    $patient['Id_Patient'] . '</td><td>' . 
                    $patient['Nom_Patient'] . '</td><td>' . 
                    $patient['Prenom_Patient'] .  '</td><td>' . 
                    $patient['Sexe_Patient'] . '</td><td>' .
                    $patient['Adresse_Patient'] . '</td><td>' . 
                    $patient['Ville_Patient'] . '</td><td>' . 
                    $patient['Departement_Patient'] . '</td><td>' . 
                    $patient['Date_Naissance_Patient'] . '</td><td>' . 
                    $patient['Situation_Familiale_Patient'] . '</td><td>' . 
                    $patient['Affiliation_Mutuelle'] . '</td><td>' . 
                    $patient['Date_Creation_Dossier'] . '</td>';
                }
        }
        else {
            echo "Error: " . $Query . "<br/>" . $Util->mysqli->error;
        }
    }
}
