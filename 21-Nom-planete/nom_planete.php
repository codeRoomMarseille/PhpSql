<?php
$servername = "localhost";
$username = "coderoom";
$password = "coderoom";
$dbname = "coderoom";

// Connexion
$conn = new mysqli($servername, $username, $password, $dbname);
var_dump($conn);
// Verification connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requete
$sql = "SELECT nom FROM objet_spatial";
$result = $conn->query($sql);

var_dump($result);

if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
        echo $row["nom"]."\n";
		var_dump($row);
    }
} else {
    echo "aucun resultat";
}

// Fermeture requete
$result->close();

// Fermeture connexion
$conn->close();
?>