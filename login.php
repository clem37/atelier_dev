<?php if (isset($user)) : ?>
    <?php echo $user['mail']; ?>
    <a href="logout.php">Déconnexion</a>

<?php else : ?>

    <form method="POST" action="admin/">
        <p class="hidden_text">img</p>

        <input name="email" type="text" id="mail" value="mail">
        <input name="password" type="password" id="mdp" value="mdp">
        <input name="connexion" type="submit" value="OK" id="ok">
        <a href="#">Mot de passe ?</a>

    </form>
<?php endif; ?>



