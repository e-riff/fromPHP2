<?php
$errors = [];
function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    (!isset($_POST['fname']) || trim($_POST['fname']) === '') ? $errors[] = "C'est quoi ton p'tit prenom ?" : $firstName = test_input($_POST['fname']);
    (!isset($_POST['lname']) || trim($_POST['lname']) === '') ? $errors[] = "J'ai besoin de ton nom de famille, voyons !" : $lastName = test_input($_POST['lname']);
    (!isset($_POST['mail']) || trim($_POST['mail']) === '') ? $errors[] = "Comment je te recontact, sans adresse ?" : $mail = test_input(stripslashes($_POST['mail']));
    (!isset($_POST['topic']) || trim($_POST['topic']) === '') ? $errors[] = "Tu me contact à quel sujet ?" : $topic = "Meaning of " . test_input($_POST['topic']);
    (!isset($_POST['phone']) || trim($_POST['phone']) === '') ? $errors[] = "Le numéro de téléphone, est obligatoire, patate" : $phone = test_input($_POST['phone']);
    (!isset($_POST["message"]) || trim($_POST['message']) === '') ? $errors[] = "Bah pourquoi t'as rien dit ? Recommence !" : $message = test_input($_POST["message"]);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo empty($errors) ? "Merci beaucoup !" : "DEATH FATAL ERROR AAAARG"; ?>
    </title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php
        if (empty($errors)) { ?>
            <h1>Yeaaaaah !</h1>
            <p>Merci <?= "$firstName $lastName"; ?>de nous avoir contacté à propos de "<?= $topic; ?>". </p>
            <p>Un de nos conseiller vous contactera à l’adresse <?= $mail; ?> ou par téléphone au <?= $phone; ?> dans les plus brefs délais pour traiter votre demande : </p>
            <p class=message><?= $message; ?></p>
    </div>
<?php
        } else { ?>
    <h1>Il va falloir recommencer !!!</h1>
    <p> Tu as fait les erreurs suivantes :</p>
    <ul>
        <?php
            foreach ($errors as $error) {
                echo "<li>" . $error . "</li>";
            }
        ?>
    </ul>
<?php
        }
?>
</body>

</html>