<?php require_once '../../layout/header.php'; ?>



<h1>Ajout d'un nouveau service</h1>

<form action="insert_query.php" method="POST">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom_service" id="libelle">
        <label for ="picto">Picto</label>
        <input type="file" name="picto_service">
        
        <textarea name="description_service"></textarea>
    </div>
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>