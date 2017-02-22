<?php
require_once '../../../model/database.php';

$liste_utilisateurs = getAllUser();

require_once '../../layout/header.php';
?>

<h1>Gestion des utilisateurs</h1>

<a href="insert_form.php">Ajouter</a>

<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse mail</th>
            <th>Administrateur</th>
            <th>Actions</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_utilisateurs as $utilisateur) : ?>
        <tr>
            <td><?php echo $utilisateur['nom']; ?></td>
            <td><?php echo $utilisateur['prenom']; ?></td>
            <td><?php echo $utilisateur['mail']; ?></td>
            <td><?php echo $utilisateur['admin'] ;?>
            </td>
            <td>
                <a href="update_form.php?id=<?php echo $utilisateur['id']; ?>">Modifier</a>
                <form action="delete_query.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $utilisateur['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>