<?php require_once '../../layout/header.php'; ?>



<h1>Ajout d'un nouvel utilisateur</h1>

<form action="insert_query.php" method="POST">
    <div>
        <label>Nom</label>
        <input type="text" name="nom_utilisateur" id="libelle">
        <label>Prénom</label>
        <input type="text" name="prenom_utilisateur" id="libelle">
        <label>Mail</label>
        <input type="email" name="mail_utilisateur" id="libelle">
        <label>Mot de passe</label>
        <input type="password" name="mot_de_passe" id="libelle">
        <label>Admin</label>
        <input type="number" name="administrateur" id="libelle">
    </div>
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>