<?php
require_once '../../../model/database.php';

$liste_equipements = getAllEquipement();

require_once '../../layout/header.php';
?>

<h1>Gestion des équipements</h1>

<a href="insert_form.php">Ajouter</a>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_equipements as $equipement) : ?>
        <tr>
            <td><?php echo $equipement['nom']; ?></td>
            <td>
                <a href="update_form.php?id=<?php echo $equipement['id']; ?>">Modifier</a>
                <form action="delete_query.php" method="POST">
                    <input value="<?php echo $equipement['icone']; ?>">
                    <input type="hidden" name="id" value="<?php echo $equipement['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>