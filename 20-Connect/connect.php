 <?php
$servername = "localhost";
$username = "coderoom";
$password = "coderoom";

// Connexion
$conn = new mysqli($servername, $username, $password);

// Verif connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Fermeture connexion
// A NE PAS OUBLIER !!!!!!!
$conn -> close();
?> 
