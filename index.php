<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "BDD_TPEURO";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Exemple de requête SQL
$sql = "SELECT * FROM `PAYS`";
$result = $conn->query($sql);

// Vérifier si la requête a réussi
if ($result->num_rows > 0) {
    // Afficher les données
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nom: " . $row["nom"] . " - primary: " . $row["primary_color"] . " - secondary: " . $row["secondary_color	"] ." - code: " . $row["code"] ." - chapeau: " . $row["chapeau"]." - playoff	: " . $row["playoff	"]." - fifa_ranking	: " . $row["fifa_ranking"]."<br>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

// Fermer la connexion
$conn->close();
?>