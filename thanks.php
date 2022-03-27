<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</html>

<?php 

echo '<body>';




$prenom = $nom = $mail = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $prenom = test_input($_POST["user_first_name"]);
  $nom = test_input($_POST["user_name"]);
  $mail = test_input($_POST["user_mail"]);
  $phone = test_input($_POST["user_phone"]);
  $message = test_input($_POST["user_message"]);
  $sujet = test_input($_POST["topics"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$prenomErr = $nomErr = $mailErr = $phoneErr = $messageErr = "";
$prenom = $nom = $mail = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user_first_name"])) {
    $prenomErr = "Veuillez indiquer votre prénom";
  } else {
    $prenom = test_input($_POST["user_first_name"]);
  }

  if (empty($_POST["user_name"])) {
    $nomErr = "Veuillez indiquer votre nom";
  } else {
    $nom = test_input($_POST["user_name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
        $nomErr = "Seules les lettre et espaces sont autorisés";
    }
  }

  if (empty($_POST["user_mail"])) {
    $mailErr = "Veuillez renseigner votre email au format indiqué";
  } else {
    $mail = test_input($_POST["user_mail"]);
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $mailErr = "Veuillez renseigner votre email au format indiqué";
  }

  if (empty($_POST["user_phone"])) {
    $phoneErr = "Veuillez renseigner votre numéro de téléphone au format indiqué";
  } else {
    $phone = test_input($_POST["user_phone"]);
  }

  if (empty($_POST["user_message"])) {
    $messageErr = "Veuillez entrer un message";
  } else {
    $message = test_input($_POST["user_message"]);
  }
}
}

echo 'Merci '.$prenom.' '.$nom.' de nous avoir contacté à propos de '.$sujet.'.';
echo '<br/>';
echo 'Un de nos conseillers vous contactera soit à l\'adresse '.$mail.' ou par téléphone au '.$phone.' dans les plus brefs délais pour traiter votre demande :';
echo '<p> '.$message.'</p>';
 
echo '</body>';

?>
