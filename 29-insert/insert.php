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
// ********************************************************
// Insert
// ********************************************************
$sql = "INSERT INTO type_objet_spatial (type) VALUES ('Comète')";
$result = $conn->query($sql);
$sql = "INSERT INTO objet_spatial (nom, masse, type) VALUES ('Halley', 10000000, 'Comète')";
$result = $conn->query($sql);
$sql = "INSERT INTO orbite (objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Halley', 11400000000000)";
$result = $conn->query($sql);

// Requete
$sql = "SELECT objet_principal, objet_secondaire, distance FROM orbite WHERE objet_principal = 'Soleil'";
$result = $conn->query($sql);

echo "********************************\n";
echo "             INSERT\n";
echo "********************************\n";
echo "Requête: ".$sql."\n";

if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
		$champ = "objet_principal";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "objet_secondaire";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "distance";
        echo $champ." = ".$row[$champ]."\n";
    }
} else {
    echo "aucun resultat";
}

// Fermeture requete
$result->close();

// ********************************************************
// Update
// ********************************************************
$sql = "DELETE FROM orbite WHERE objet_secondaire = 'Halley'";
$result = $conn->query($sql);
$sql = "UPDATE objet_spatial SET nom = 'Halley P/1682 Q1' WHERE nom = 'Halley'";
$result = $conn->query($sql);
$sql = "INSERT INTO orbite (objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Halley P/1682 Q1', 11400000000000)";
$result = $conn->query($sql);

// Requete
$sql = "SELECT objet_principal, objet_secondaire, distance FROM orbite WHERE objet_principal = 'Soleil'";
$result = $conn->query($sql);

echo "********************************\n";
echo "             UPDATE\n";
echo "********************************\n";
echo "Requête: ".$sql."\n";

if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
		$champ = "objet_principal";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "objet_secondaire";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "distance";
        echo $champ." = ".$row[$champ]."\n";
    }
} else {
    echo "aucun resultat";
}

// Fermeture requete
$result->close();

// ********************************************************
// Delete
// ********************************************************
$sql = "DELETE FROM orbite WHERE objet_secondaire = 'Halley P/1682 Q1'";
$result = $conn->query($sql);
$sql = "DELETE FROM objet_spatial WHERE nom = 'Halley P/1682 Q1'";
$result = $conn->query($sql);
$sql = "DELETE FROM type_objet_spatial WHERE type = 'Comète'";
$result = $conn->query($sql);

// Requete
$sql = "SELECT objet_principal, objet_secondaire, distance FROM orbite WHERE objet_principal = 'Soleil'";
$result = $conn->query($sql);

echo "********************************\n";
echo "             DELETE\n";
echo "********************************\n";
echo "Requête: ".$sql."\n";

if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
		$champ = "objet_principal";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "objet_secondaire";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "distance";
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