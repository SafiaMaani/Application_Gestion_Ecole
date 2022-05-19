<?php
    $data = new ParentsController();
    $parentData = $data->getOneId();

if (isset($_POST['updateParent'])) {
    echo 'WHAT THE HELLLLLLLLL';
    $upParent = new ParentsController();
    $upParent->updateParent();
}
?>
<form method="post">
    <label class="mb-1">Nom complet</label>
    <input class="mb-1" type="text" name="full_name" value="<?php echo ($parentData['full_name'])?>">

    <label class="mb-1">Gender</label>
    <input class="mb-1" type="text" name="gender" value="<?php echo ($parentData['gender'])?>">

    <label class="mb-1">Job</label>
    <input class="mb-1" type="text" name="job" value="<?php echo ($parentData['job'])?>">

    <label class="mb-1">Adresse</label>
    <input class="mb-1" type="text" name="adresse" value="<?php echo ($parentData['adresse'])?>">

    <label class="mb-1">Phone</label>
    <input class="mb-1" type="text" name="phone" value="<?php echo ($parentData['phone'])?>">
    <input type="hidden" name="id_parent" value="<?php echo ($parentData['id_parent'])?>">

    <button type="submit" name="updateParent" class="btn btn-primary">
        Modifer
    </button>
</form>