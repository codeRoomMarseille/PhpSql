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
$sql = "SELECT os1.nom as nom1, os1.atmosphere as atmosphere1, os2.nom as nom2, os2.atmosphere as atmosphere2 
         FROM objet_spatial os1, objet_spatial os2, orbite ob 
		 WHERE os1.nom = ob.objet_principal AND os2.nom = ob.objet_secondaire";
		 
$result = $conn->query($sql);

echo "Requête: ".$sql."\n";

if ($result->num_rows > 0) {
    // Affichage de chaque ligne
    while($row = $result->fetch_assoc()) {
		$champ = "nom1";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "atmosphere1";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "nom2";
        echo $champ." = ".$row[$champ]."  ";
		$champ = "atmosphere2";
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