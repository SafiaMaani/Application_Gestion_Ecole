<?php
if (isset($_POST['delete'])) {
    $byeParent = new ParentsController();
    $byeParent->deleteParent();
}

