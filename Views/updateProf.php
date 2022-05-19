<?php
    $data = new ProfController();
    $prof = $data->getOneId();

if (isset($_POST['updateProf'])) {
    $upProf = new ProfController();
    $upProf->updateProf();
}
?>
<form method="post">
    <label class="mb-1">Nom complet</label>
    <input class="mb-1" type="text" name="full_name" value="<?php echo ($prof['full_name'])?>">

    <label class="mb-1">Gender</label>
    <input class="mb-1" type="text" name="gender" value="<?php echo ($prof['gender'])?>">

    <label class="mb-1">Matière</label>
    <input class="mb-1" type="text" name="matiere" value="<?php echo ($prof['matiere'])?>">

    <label class="mb-1">Classe</label>
    <input class="mb-1" type="text" name="classe" value="<?php echo ($prof['classe'])?>">

    <label class="mb-1">Phone</label>
    <input class="mb-1" type="text" name="phone" value="<?php echo ($prof['phone'])?>">
    <input type="hidden" name="id_prof" value="<?php echo ($prof['id_prof'])?>">

    <button type="submit" name="updateProf" class="btn btn-primary">
        Modifer
    </button>
</form>