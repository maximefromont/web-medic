<?php session_start();
try {
    $db = new PDO('mysql:host=localhost;dbname=osteoBDD;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$sqlPrepStat = $db->prepare('SELECT id, login, password FROM user WHERE login = :sentLogin');
$sqlPrepStat->execute(array(
    'sentLogin' => $_POST['login']
));
$result = $sqlPrepStat->fetch();

echo(password_hash($_POST['password'], PASSWORD_DEFAULT));
$boolPasswordCheck = password_verify($_POST['password'], $result['password']);

if (!$result) {
    $_SESSION['boolLog'] = true;

} else {
    if (isset($_SESSION['boolLog']) and $_SESSION['boolLog']) {
        $_SESSION['boolLog'] = false;
    }
    if ($boolPasswordCheck) {
        $_SESSION['id'] = $result['id'];
        $_SESSION['login'] = $result['login'];
        if (isset($_SESSION['boolPass']) and $_SESSION['boolPass']) {
            $_SESSION['boolPass'] = false;
        }
        header('Location: patientsList.php');
    } else {
        $_SESSION['boolPass'] = true;

    }
}
if ($_SESSION['boolLog'] == true or $_SESSION['boolPass'] == true) {
    echo("<br/>");
    echo("Log : ".$_SESSION['boolLog']." Pass : ".$_SESSION['boolPass']);
    header('Location: index.php');
}
