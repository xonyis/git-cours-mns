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

// $sql = "(\n"

//     . "  SELECT * FROM country WHERE chapeau = 1 ORDER BY RAND() LIMIT 1\n"

//     . ")\n"

//     . "UNION ALL\n"

//     . "(\n"

//     . "  SELECT * FROM country WHERE chapeau = 2 ORDER BY RAND() LIMIT 1\n"
 
//     . ")\n"

//     . "UNION ALL\n"

//     . "(\n"

//     . "  SELECT * FROM country WHERE chapeau = 3 ORDER BY RAND() LIMIT 1\n"

//     . ")\n"

//     . "UNION ALL\n"

//     . "(\n"

//     . "  SELECT * FROM country WHERE chapeau = 4 ORDER BY RAND() LIMIT 1\n"

//     . ");";

$idChapeau = 1; // Remplacez cela par l'ID du chapeau souhaité

// Requête SQL pour récupérer toutes les lignes avec le même ID chapeau
$sql = "SELECT * FROM country WHERE chapeau = $idChapeau";
$result = $conn->query($sql);

// Vérifier si la requête a réussi
if ($result->num_rows > 0) {
    // Afficher les données
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nom: " . $row["nom"] . " - primary: " . $row["primary_color"] . "te - secondary: " . $row["secondary_color	"] ." - code: " . $row["code"] ." - chapeau: " . $row["chapeau"]." - playoff	: " . $row["playoff	"]." - fifa_ranking	: " . $row["fifa_ranking"]."<br>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

// Fermer la connexion
$conn->close();


?>