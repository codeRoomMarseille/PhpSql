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
		$sql = "SELECT objet_secondaire FROM orbite WHERE objet_principal = '" . htmlspecialchars($_GET["l"]) . "'";
		$result = $conn->query($sql);

		echo "<table>";
		if ($result->num_rows > 0) {
			// Affichage de chaque ligne
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>";
				echo $row["objet_secondaire"]; 
				echo "</td></tr>";
			}
		} else {
			echo "aucun resultat";
		}
		echo "</table>";

		// Fermeture requete
		$result->close();

		// Fermeture connexion
		$conn->close();
	?>

