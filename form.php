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

echo '<form enctype="multipart/form-data" action="thanks.php" method="post" id="contact_form>
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" required>
    </div>
    <div>
        <label for="first_name">Prénom :</label>
        <input type="text" id="first_name" name="user_first_name" required>
    </div>
    <div>
        <label for="mail">E-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phone">Numéro de téléphone :</label>
        <input type="tel" id="phone" name="user_phone" pattern="[0-9]{10}"
        required>
        <small>Format: 0601020304</small>
    </div>
    <div>
    <label for="topic">Choisissez un sujet:</label>

    <select name="topics" id="topic" required>
        <option value="top1">--Choisissez un sujet--</option>
        <option value="php">Apprendre PHP</option>
        <option value="java">Apprendre Java</option>
        <option value="javascript">Apprendre JavaScript</option>
    </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
    </form>';

    echo  $_POST['user_name'];

echo '</body>';

?>
