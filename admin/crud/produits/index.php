<?php
require_once '../../../model/database.php';
require_once '../../../model/entity/categorie_entity.php';


$liste_produits = getAllProduits();

require_once '../../layout/header.php';
?>

<h1>Gestion des produits</h1>

<a href="insert_form.php">Ajouter</a>

<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Image</th>
            <th>Description</th>
            <th>Référence</th>
            <th>Matériau</th>
            <th>Colisage</th>
            <th>Poids</th>
            <th>Catégorie</th>
            <th>Services</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_produits as $produit) : ?>
        <tr>
            <td><?php echo $produit['titre']; ?></td>
            <td><img src='../../../uploads/<?php echo $produit['image']; ?>'></td>
            <td><?php echo $produit['description']; ?></td>
            <td><?php echo $produit['reference']; ?></td>
            <td><?php echo $produit['materiau']; ?></td>
            <td><?php echo $produit['colisage']; ?></td>
            <td><?php echo $produit['poids']; ?></td>
            <td><?php echo $produit['categorie']; ?></td>
            <?php $liste_services = getAllServicesByProduit($produit['id']); ?>
           
            <td> <?php foreach ($liste_services as $service) : ?> <li><?php echo $service['nom'];?></li> <?php  endforeach;?></td>
            
            
            <td>
                <a href="update_form.php?id=<?php echo $produit['id']; ?>">Modifier</a>
                <form action="delete_query.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $produit['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


