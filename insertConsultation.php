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

$sql = "INSERT INTO consultation (id_patient, date, motif, traitement) 
            VALUES (?, ?, ?, ?);";
$stmt = $db->prepare($sql);

$id_patient = $_POST['idPatient'];
$date = checkNull($_POST['date']);
$motif = checkNull($_POST['motif']);
$traitement = checkNull($_POST['traitement']);

echo "\n".$id_patient;
echo "\n".$date;
echo "\n".$motif;
echo "\n".$traitement;

$stmt->execute([
    $id_patient, $date, $motif, $traitement
]);

echo "\ndone";
