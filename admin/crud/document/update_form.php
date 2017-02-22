<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$utilisateur = getUser($id);

require_once '../../layout/header.php';
?>
<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<h1>Modification d'un utilisateur</h1>

<form action="update_query.php" method="POST">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="<?php echo $utilisateur['nom']; ?>">
        <input type="text" name="prenom" id="nom" value="<?php echo $utilisateur['prenom']; ?>">
        <input type="text" name="mail" id="nom" value="<?php echo $utilisateur['mail']; ?>">
        <input type="text" name="admin" id="nom" value="<?php echo $utilisateur['admin']; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $utilisateur['id']; ?>">
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>