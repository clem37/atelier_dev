<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$service = getService($id);

require_once '../../layout/header.php';
?>

<h1>Modification d'un service</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="<?php echo $service['nom']; ?>">
        <textarea name="description"><?php echo $service['description']; ?></textarea>
        <label for="picto">Picto</label>
        <input type="file" name="picto">
    </div>
    <input type="hidden" name="id" value="<?php echo $service['id']; ?>">
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>