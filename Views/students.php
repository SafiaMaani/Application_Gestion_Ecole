<?php
$data = new étudiantsController();
$étudiants = $data->getAllétudiants();
if (isset($_POST['submit'])) {
    $étudiant = $data->addétudiant();
    print_r($étudiant);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="Views/Assets/image/favion.png" type="image/x-icon">
    <link rel="stylesheet" href="Views/Assets/css/style.css">
    <link rel="stylesheet" href="Views/Assets/css/dashboard.css">
    <title>Students</title>
</head>

<body>

    <div>
        <div>
            <?php require_once "Includes/navbar.php"; ?>
        </div>

        <div class="d-flex justify-content-between">
            <div>
                <?php require_once "Includes/sidebar.php"; ?>
            </div>
            <div class="body  me-5">
                <div class="head d-flex justify-content-between align-items-center border-bottom border-3 pt-5 pb-2 mt-5">
                    <h3 class="title">Listes des étudiants</h3>
                    <!-- Button trigger modal -->
                    <button class="ajouter text-white border-0 rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                        </svg>Ajouter</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary" id="exampleModalLabel">Ajouter les infos des étudiants</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" class="d-flex flex-column">
                                        <label class="mb-1">Matricule</label>
                                        <input class="mb-1" type="number" name="Matricule">

                                        <label class="mb-1">Nom_complet</label>
                                        <input class="mb-1" type="text" name="Nom_complet">
                                        <label class="mb-1">Genre </label>
                                        <input class="mb-1" type="text" name="Genre">

                                        <label class="mb-1">Class </label>
                                        <input class="mb-1" type="number" name="Class">

                                        <label class="mb-1">Parent_Id</label>
                                        <input class="mb-1" type="text" name="Parent_Id">

                                        <label class="mb-1">Adress</label>
                                        <input class="mb-1" type="text" name="Address">

                                        <label class="mb-1">Date_de_naissance</label>
                                        <input class="mb-1" type="date" name="Date_de_naissance">

                                        <label class="mb-1">Email</label>
                                        <input class="mb-1" type="Email" name="Email">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                            <button type="submit" name="submit" class="btn btn-primary" data-bs-dismiss="modal">
                                                Ajouter l'étudiant
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                ?>
                <div class="students__table  d-flex flex-column ">
                    <div class="text-primary py-2  d-flex justify-content-between">
                        <div class="d-flex align-items-center ">
                            <h5 class="me-2">Afficher</h5>
                            <input class="nav-link dropdown-toggle w-25 border-primary" type="number">
                            <h5 class="ms-2">entités</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control border-primary" name="search" placeholder="Recherche">
                        </div>
                    </div>
                    <table class="table table-responsive table-borderless">
                        <thead>
                            <tr class="text-white">
                                <th>Matricule <i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Nom_complet <i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Genre <i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Class <i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Parent_Id<i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Address <i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Date_de_naissance<i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Email<i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php

                            $data = new étudiantsController();
                            $étudiants = $data->getAllétudiants();

                            foreach ($étudiants as $étudiant) : ?>
                                <tr class="bg-light">
                                    <td><?= $étudiant['Matricule'] ?></td>
                                    <td><?= $étudiant['Nom_complet'] ?></td>
                                    <td><?= $étudiant['Class'] ?></td>
                                    <td><?= $étudiant['Genre'] ?></td>
                                    <td><?= $étudiant['Parent_Id'] ?></td>
                                    <td><?= $étudiant['Address'] ?></td>
                                    <td><?= $étudiant['Date_de_naissance'] ?></td>
                                    <td><?= $étudiant['Email'] ?></td>
                                    <td class="d-flex justify-content-evenly">
                                        <form method="post" class="mr-1" action="updateStud">
                                            <input type="hidden" name="id" value="<?php echo $étudiant['id']; ?>">
                                            <button type="submit" name="update" class="border border-0 ">
                                                <i class="far fa-edit text-primary"></i>
                                            </button>
                                        </form>

                                        <form method="post" class="mr-1" action="deleteStud">
                                            <input type="hidden" name="id" value="<?php echo $étudiant['id']; ?>">
                                            <button type="submit" name="delete" class="border border-0">
                                                <i class="far fa-trash text-danger"></i>
                                            </button>
                                        </form>

                                </tr><br>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div>
                </div>
            </div>
            </main>
        </div>
    </div>
    </div>


    <!-- SCRIPT -->
    <script src="./Script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>