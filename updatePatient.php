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

$sql = "UPDATE patient SET name=?, firstname=?, gender=?, birthdate=?, adresse=?, housephone=?, prophone=?, cellphone=?, mail=?, sentby=?, nummut=?, job=?, situation=?, childrens=?, note=?, id_medecin=?, id_mutuelle=?, id_user=? WHERE id=?;";
$stmt = $db->prepare($sql);

$idPatient = $_POST['idPatient'];
$name = checkNull($_POST['nom']);
$firstname = checkNull($_POST['prenom']);
$gender = checkNull($_POST['genre']);
$birthdate = checkNull($_POST['date']);
$adress = checkNull($_POST['adresse']);
$housephone = checkNull($_POST['fixe']);
$prophone = checkNull($_POST['pro']);
$cellphone = checkNull($_POST['num']);
$mail = checkNull($_POST['mail']);
$sentby = checkNull($_POST['envoye']);
$nummut = checkNull($_POST['nummut']);
$job = checkNull($_POST['profession']);
$situation = checkNull($_POST['situation']);
$childrens = checkNull($_POST['enfants']);
$note = checkNull($_POST['remarque']);
$id_medecin = checkNull($_POST['idMedecin']);
$id_mutuelle = checkNull($_POST['idMutuelle']);
$id_user = checkNull($_POST['idUser']);

echo "\n".$idPatient;
echo "\n".$name;
echo "\n".$firstname;
echo "\n".$gender;
echo "\n".$birthdate;
echo "\n".$adress;
echo "\n".$housephone;
echo "\n".$prophone;
echo "\n".$cellphone;
echo "\n".$mail;
echo "\n".$sentby;
echo "\n".$nummut;
echo "\n".$job;
echo "\n".$situation;
echo "\n".$childrens;
echo "\n".$note;
echo "\n".$id_medecin;
echo "\n".$id_mutuelle;
echo "\n".$id_user;

$stmt->execute([
    $name, $firstname, $gender, $birthdate, $adresse, $_housephone, $prophone, $cellphone, $mail, $sentby, $nummut, $job, $situation, $childrens, $note, $id_medecin, $id_mutuelle, $id_user, $idPatient
]);

echo "\ndone";
