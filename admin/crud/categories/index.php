<?php
require_once '../../../model/database.php';

$liste_categories = getAllCategories();

require_once '../../layout/header.php';
?>

<h1>Gestion des catégories</h1>

<a href="insert_form.php">Ajouter</a>

<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Image</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_categories as $categorie) : ?>
            <tr>
                <td><?php echo $categorie['nom']; ?></td>
                <td><img src='../../../uploads/<?php echo $categorie['image']; ?>'></td>
                <td><?php echo $categorie['description']; ?></td>
                <td>
                    <a href="update_form.php?id=<?php echo $categorie['id']; ?>">Modifier</a>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $categorie['id']; ?>">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>