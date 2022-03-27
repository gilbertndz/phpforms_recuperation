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

$prenom= $_POST['user_first_name'];
$nom= $_POST['user_name'];
$sujet= $_POST['topics'];
$mail= $_POST['user_mail'];
$phone= $_POST['user_phone'];
$message= $_POST['user_message'];

echo 'Merci '.$prenom.' '.$nom.' de nous avoir contacté à propos de '.$sujet.'.';
echo '<br/>';
echo 'Un de nos conseillers vous contactera soit à l\'adresse '.$mail.' ou par téléphone au '.$phone.' dans les plus brefs délais pour traiter votre demande :';
echo '<p> '.$message.'</p>';
 
echo '</body>';

?>
