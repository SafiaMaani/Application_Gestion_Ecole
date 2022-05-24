<?php
$data = new ParentsController();
$parentData = $data->getOneId();

if (isset($_POST['updateParent'])) {
    echo 'WHAT THE HELLLLLLLLL';
    $upParent = new ParentsController();
    $upParent->updateParent();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="Views/Assets/image/favion.png" type="image/x-icon">
    <link rel="stylesheet" href="Views/Assets/style.css">
    <title>Update Parent</title>
</head>

<body>
    <div class="d-flex justify-content-center p-5">
        <form method="post" class="d-flex flex-column w-75">
            <label class="mb-1">Nom complet</label>
            <input class="mb-1" type="text" name="full_name" value="<?php echo ($parentData['full_name']) ?>">

            <label class="mb-1">Gender</label>
            <select name="gender" value="<?php echo ($prof['gender']) ?>">
                <option>Male</option>
                <option>Female</option>
            </select>

            <label class="mb-1">Job</label>
            <select name="job" value="<?php echo ($prof['job']) ?>">
                <option>Salarié</option>
                <option>Fonctionnaire</option>
                <option>Travail indépendant</option>
                <option>Aucun</option>
            </select>

            <label class="mb-1">Adresse</label>
            <input class="mb-1" type="text" name="adresse" value="<?php echo ($parentData['adresse']) ?>">

            <label class="mb-1">Phone</label>
            <input class="mb-1" type="text" name="phone" value="<?php echo ($parentData['phone']) ?>">
            <input type="hidden" name="id_parent" value="<?php echo ($parentData['id_parent']) ?>">

            <button type="submit" name="updateParent" class="btn btn-primary">
                Modifer
            </button>
        </form>
    </div>
</body>

</html>