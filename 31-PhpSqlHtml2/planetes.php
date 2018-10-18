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
	$sql = "SELECT nom FROM objet_spatial";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// Affichage de chaque ligne
		while($row = $result->fetch_assoc()) {
			echo '<div>';
			echo '<label>';
			echo '<input type="radio" name="planete" value="'.$row["nom"].'" onclick="changePlanete(this)"/> '.$row["nom"]; 
			echo '</label>';
			echo '</div>';
		}
	} else {
		echo "aucun resultat";
	}

	// Fermeture requete
	$result->close();

	// Fermeture connexion
	$conn->close();
?>
