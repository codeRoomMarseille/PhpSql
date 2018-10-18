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
	$sql = "SELECT objet_principal, objet_secondaire FROM orbite";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// Affichage de chaque ligne
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo '<td>'.$row["objet_principal"].'</td>'; 
			echo '<td>'.$row["objet_secondaire"].'</td>'; 
			echo "</tr>";
		}
	} else {
		echo "aucun resultat";
	}

	// Fermeture requete
	$result->close();

	// Fermeture connexion
	$conn->close();
?>
