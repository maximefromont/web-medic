<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=osteoBDD;charset=utf8', 'root', 'root');
} catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
}

$sql = "INSERT INTO medecin (nom_medecin) VALUES (?);";
$stmt = $db->prepare($sql);
$stmt->execute([$_POST['name']]);

?>
