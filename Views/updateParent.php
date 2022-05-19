<?php
if (isset($_POST['updateParent'])) {
    echo 'helllllo';
    $upParent = new ParentsController();
    $upParent->updateParent();
}
?>
<form method="post" action="parents">
    <label class="mb-1">Nom complet</label>
    <input class="mb-1" type="text" name="full_name">

    <label class="mb-1">Gender</label>
    <input class="mb-1" type="text" name="gender">

    <label class="mb-1">Job</label>
    <input class="mb-1" type="text" name="job">

    <label class="mb-1">Adresse</label>
    <input class="mb-1" type="text" name="adresse">

    <label class="mb-1">Phone</label>
    <input class="mb-1" type="text" name="phone">

    <button type="submit" name="updateParent" class="btn btn-primary">
        Modifer
    </button>
</form>