<?php
require_once ('src/databaseconnexion.php');
?>

<?php

// On récupère tout le contenu de la table jeux_video
$reponse = $dbh->query('SELECT * FROM user_infos ORDER BY id DESC LIMIT 0,1;');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>


<div class="container">
    <section id="user_profile">
        <div id="profile_header">
            <img src="img/Wild-Logo.png" alt="Wild Code School logo">
            <h2>Team Wilders 1</h2>
        </div>

        <h3>Profile</h3>
        <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <label for="username">Username :</label>
            <input type="text" name="username" id="username" maxlength="30" placeholder="<?= $donnees['user_name'];?>" />
            <?= $formErrors['username'] ?>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" placeholder="<?= $donnees['user_email'];?>" />
            <?= $formErrors['email'] ?>

            <label for="avatar">Avatar :</label>
            <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="example_f">

            <label for="biography">Biography :</label>
            <textarea name="biography" id="biography" maxlength="500" placeholder="<?= $donnees['user_biography'];?>"></textarea>

            <input type="submit" value="Save changes" class="example_f" />

        </form>


        <h3>Change your password</h3>
        <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <label for="current_password">Current Password :</label>
            <input type="password" name="current_password" id="current_password" maxlength="16" placeholder="Enter your current password" />
            <?= $formErrors['current_password'] ?>

            <label for="new_password">New Password :</label>
            <input type="password" name="new_password" id="new_password" maxlength="16" placeholder="Enter your new password" />
            <?= $formErrors['new_password'] ?>

            <label for="new_password_verification">Retype New Password :</label>
            <input type="password" id="new_password_verification" name="new_password_verification" maxlength="16" placeholder="Enter your new password again" />
            <?= $formErrors['new_password_verification'] ?>

            <?= $savedChange ?>

            <input type="submit" value="Save changes" class="example_f" />

        </form>

        <form>
            <input type="button" value="Delete your account" class="example_f" />
        </form>
    </section>
</div>

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>