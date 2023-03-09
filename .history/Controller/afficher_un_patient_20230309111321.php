<?php


require('../Controller/Util.php');

if (isset($_POST["Nom_Patient"])) {
    $Util = new Util();
    $Util->dbConnection();

    $query = "SELECT * FROM patient WHERE Nom_Patient = '" . $_POST['Nom_Patient'] . "'";
    $result = mysqli_query($Util->mysqli, $query);

    if ($Util->mysqli->connect_error) {
        die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
    }

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table id='customers'>
    <tr>
    <td>Name</td>
    <td>Roll no</td>
    <td> Sem</td></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
      <td>" . $row["name"] . "</td>" .
                "<td>" . $row["rollno"] . "</td>" .
                "<td>" . $row["sem"] . "</td>"
                . "</tr>";
        }
        echo "</td>";
    } else {
        echo "0 results";
    }
    $conn->close();
}
