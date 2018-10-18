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

// Liste des tables
$result = $conn->query("SHOW TABLES");

echo "LISTE DES TABLES DE LA DATABASE: ".$dbname."\n";
if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
        echo "Nom de la table: ".$row["Tables_in_".$dbname]."\n";
		var_dump($row);
    }
} else {
    echo "aucun resultat";
}

// Fermeture requete
$result->close();

$maTable = "objet_spatial";
echo "LISTE DES CHAMPS DE LA TABLE: ".$maTable."\n";

// Liste des champs d'une table
$result = $conn->query("SHOW COLUMNS FROM ".$maTable);

if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
        echo "Nom du champ: ".$row["Field"]."\n";
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
