<?php
require_once '../../../model/database.php';

$liste_services = getAllServices();

require_once '../../layout/header.php';
?>

<h1>Gestion des services</h1>

<a href="insert_form.php">Ajouter</a>

<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Picto</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_services as $service) : ?>
        <tr>
            <td><?php echo $service['nom']; ?></td>
            <td><?php echo $service['description']; ?></td>
            <td><img src='../../../uploads/<?php echo $service['picto']; ?>'></td>
            <td>
                <a href="update_form.php?id=<?php echo $service['id']; ?>">Modifier</a>
                <form action="delete_query.php" method="POST">
                    
                    <input type="hidden" name="id" value="<?php echo $service['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>