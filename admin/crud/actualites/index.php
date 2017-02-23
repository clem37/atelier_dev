<?php
require_once '../../../model/database.php';

$liste_actualites = getAllActualites();

require_once '../../layout/header.php';
?>

<h1>Gestion des actualités</h1>

<a href="insert_form.php">Ajouter</a>

<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Image</th>
            <th>Description courte</th>
            <th>Description longue</th>
            <th>Date de création</th>
            <th>Afficher ou non</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_actualites as $actualite) : ?>
            <tr>
                <td><?php echo $actualite['titre']; ?></td>
                <td><img src='../../../uploads/<?php echo $actualite['image']; ?>'></td>
                <td><?php echo $actualite['description_courte']; ?></td>
                <td><?php echo $actualite['description_longue']; ?></td>
                <td><?php echo $actualite['date_creation_format']; ?></td>
                <td><?php echo $actualite['afficher']; ?></td>
                <td>
                    <a href="update_form.php?id=<?php echo $actualite['id']; ?>">Modifier</a>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $actualite['id']; ?>">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>