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
$sql = "SELECT nom FROM objet_spatial WHERE type = 'Tellurique' Order by nom LIMIT 5";
$result = $conn->query($sql);

echo "Requête: ".$sql."\n";

if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
		$champ = "nom";
        echo $champ." = ".$row[$champ]."\n";
    }
} else {
    echo "aucun resultat";
}

// Fermeture requete
$result->close();
// Fermeture connexion
$conn->close();
?>