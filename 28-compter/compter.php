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
$sql = "SELECT count(nom) as compte, type FROM objet_spatial GROUP BY type";
$result = $conn->query($sql);

echo "Requête: ".$sql."\n";

if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
		$champ = "compte";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "type";
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