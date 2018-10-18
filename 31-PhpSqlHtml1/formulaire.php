<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Plan&egrave;te</title>
  </head>

  <body>

    <form id="myForm" method="GET" action="planete.php">
		<h2>S&eacute;lectionnez un objet dans la liste pour savoir ce qui tourne autour</h2>
		<select id="monObjet" name="monObjet">
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
					echo '<option value="'.$row["nom"].'">'.$row["nom"].'</option>'; 
				}
			} else {
				echo "aucun resultat";
			}

			// Fermeture requete
			$result->close();

			// Fermeture connexion
			$conn->close();
		?>
		</select>
		<br/>
		<br/>
		<input type="submit" value="Submit !" />
		<input type="reset" value="Reset !" />
    </form>
      
 	<script src="scripts/formulaire.js" type="text/javascript"></script>

  </body>
</html>