<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Planete</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
  </head>

  <body>
 	<script src="scripts/planete.js" type="text/javascript"></script>
	<?php
		echo '<br>Objet: ' . htmlspecialchars($_GET["monObjet"]) . '!';
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
		$sql = "SELECT objet_secondaire FROM orbite WHERE objet_principal = '" . htmlspecialchars($_GET["monObjet"]) . "'";
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

  </body>
</html>