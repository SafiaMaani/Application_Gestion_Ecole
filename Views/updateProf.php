<?php
$data = new ProfController();
$prof = $data->getOneId();

if (isset($_POST['updateProf'])) {
    $upProf = new ProfController();
    $upProf->updateProf();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Views/Assets/style.css">
    <title>Update Prof</title>
</head>

<body>
    <div class="d-flex justify-content-center p-5">
        <form method="post" class="d-flex flex-column w-75">
            <label class="mb-1">Nom complet</label>
            <input class="mb-1" type="text" name="full_name" value="<?php echo ($prof['full_name']) ?>">

            <label class="mb-1">Gender</label>
            <select name="gender" value="<?php echo ($prof['gender']) ?>">
                <option>Male</option>
                <option>Female</option>
            </select>

            <label class="mb-1">Matière</label>
            <select name="matiere" value="<?php echo ($prof['matiere']) ?>">
                <option>Javascript</option>
                <option>Php</option>
                <option>Php's Frameworks</option>
                <option>Java</option>
                <option>Java's Frameworks</option>
                <option>HTML/CSS/BOOTSRAP</option>
            </select>

            <label class="mb-1">Classe</label>
            <select name="classe" value="<?php echo ($prof['classe']) ?>">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>

            <label class="mb-1">Phone</label>
            <input class="mb-1" type="text" name="phone" value="<?php echo ($prof['phone']) ?>">
            <input type="hidden" name="id_prof" value="<?php echo ($prof['id_prof']) ?>">

            <button type="submit" name="updateProf" class="btn btn-primary">
                Modifer
            </button>
        </form>
    </div>
</body>

</html>