<?php require_once '../../layout/header.php'; ?>



<h1>Ajout d'un nouvel utilisateur</h1>

<form action="insert_query.php" method="POST">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom_utilisateur" id="libelle">
        <label for="nom">Prénom</label>
        <input type="text" name="prenom_utilisateur" id="libelle">
        <label for="nom">Mail</label>
        <input type="text" name="mail_utilisateur" id="libelle">
        <label for="nom">Mot de passe</label>
        <input type="password" name="mot_de_passe" id="libelle">
        <label for="nom">Admin</label>
        <input type="number" name="administrateur" id="libelle">
    </div>
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>