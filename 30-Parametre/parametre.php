<?php
$servername = "localhost";
$username = "coderoom";
$password = "coderoom";
$dbname = "coderoom";

// Connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Verification connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requete
// $sql = "SELECT nom, masse, type, atmosphere FROM objet_spatial WHERE nom = ?";
$sql = "INSERT INTO type_objet_spatial (type) VALUES (?)";
$result = $conn->prepare($sql);
$objet = "coco";
$result->bind_param('s', $objet);
$result->execute();

// Requete
$sql = "SELECT type FROM type_objet_spatial";
$result = $conn->query($sql);

echo "Requête: ".$sql."\n";

if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
		$champ = "type";
        echo $champ." = ".$row[$champ]."  ";
    }
} else {
    echo "aucun resultat";
}

// Fermeture requete
$result->close();
// Fermeture connexion
$conn->close();
?>