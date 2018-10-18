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
$sql = "SELECT objet_secondaire, masse FROM objet_spatial, orbite WHERE objet_principal = nom AND objet_principal = 'JUPITER'";
$result = $conn->query($sql);

echo "Requête: ".$sql."\n";

if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
		$champ = "objet_secondaire";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "masse";
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