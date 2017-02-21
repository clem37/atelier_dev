<?php require_once '../../layout/header.php'; ?>

<h1>Ajout d'un nouveau équipement</h1>

<form action="insert_query.php" method="POST">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom_equipement" id="libelle">
    </div>
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>