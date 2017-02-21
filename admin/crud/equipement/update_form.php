<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$equipement = getEquipement($id);

require_once '../../layout/header.php';
?>

<h1>Modification d'un équipement</h1>

<form action="update_query.php" method="POST">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom_equipement" id="nom" value="<?php echo $equipement['nom']; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $equipement['id']; ?>">
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>