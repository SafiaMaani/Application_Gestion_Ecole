<?php
if (isset($_POST['delete'])) {
    $byeProf = new ProfController();
    $byeProf->deleteProf();
}