<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=osteoBDD;charset=utf8', 'root', 'root');
} catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
}

$sql = "INSERT INTO mutuelle (nom_mutuelle) VALUES (?);";
$stmt = $db->prepare($sql);
$stmt->execute([$_POST['name']]);

?>