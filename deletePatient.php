<?php

function checkNull($value)
{
    if ($value == '') {
        return NULL;
    } else {
        return $value;
    }
}

try {
    $db = new PDO('mysql:host=localhost;dbname=osteoBDD;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$sql = "DELETE FROM patient WHERE id=?;";
$stmt = $db->prepare($sql);

$idPatient = $_POST['idPatient'];

echo "\n".$idPatient;

$stmt->execute([
    $idPatient
]);

echo "\ndone";
