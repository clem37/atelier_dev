<?php require_once 'model/database.php'; ?>

<form action="envoyer_mail.php" method="POST" id="form-create-message">
    <div>
    <label>Nom</label>
    <input type="text" name="nom">
    </div>
    <div>
    <label>Prénom</label>
    <input type="text" name="prenom">
    </div>
    <div>
    <label>Mail</label>
    <input type="text" name="mail">
    </div>
    <div>
    <label>Message</label>
    <textarea name="message">Entrez votre message</textarea>
    </div>
    <div>
    <input type="submit" value="envoyer">
    </div>
</form>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/script.js"></script>