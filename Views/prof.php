<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Views/Assets/style.css">
    <title>Proffesseurs</title>
</head>

<body>
    <div>
        <div>
            <?php require_once "Includes/navbar.php"; ?>
        </div>

        <div class="d-flex justify-content-around">
            <div>
                <?php require_once "Includes/sidebar.php"; ?>
            </div>
            <div class="body">
                <div class="head d-flex justify-content-between align-items-center border-bottom border-3 pt-5 pb-2 mt-5">
                    <h3 class="title">Listes des proffesseurs</h3>
                    <!-- Button trigger modal -->
                    <button class="ajouter text-white border-0 rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                        </svg>
                        Ajouter
                    </button>
                    <?php
                    $add = new ProfController();
                    $add->addProf();
                    ?>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary" id="exampleModalLabel">Ajouter les infos de proffesseur</h5>
                                    <form method="post" class="d-flex flex-column">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex flex-column">
                                    <form method="post">
                                        <label class="mb-1">Nom complet</label>
                                        <input class="mb-1" type="text" name="full_name">

                                        <label class="mb-1">Gender</label>
                                        <input class="mb-1" type="text" name="gender">

                                        <label class="mb-1">classe</label>
                                        <input class="mb-1" type="text" name="classe">

                                        <label class="mb-1">Matière</label>
                                        <input class="mb-1" type="text" name="matiere">

                                        <label class="mb-1">Phone</label>
                                        <input class="mb-1" type="text" name="phone">

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="addProf" class="btn btn-primary" data-bs-dismiss="modal">
                                                Ajouter le proffesseur
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <th>Nom complet <i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Genre <i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>classe <i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Matière <i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Phone<i class="fas fa-sort fs-4 ms-auto"></i></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $data = new ProfController();
                            $profs= $data->getAllProf();

                            foreach ($profs as $prof) : ?>
                                <tr>
                                    <td><?= $prof['id_prof'] ?></td>
                                    <td><?= $prof['full_name'] ?></td>
                                    <td><?= $prof['gender'] ?></td>
                                    <td><?= $prof['classe'] ?></td>
                                    <td><?= $prof['matiere'] ?></td>
                                    <td><?= $prof['phone'] ?></td>
                                    <td class="d-flex justify-content-evenly">
                                        <form method="post" class="mr-1" action="updateProf">
                                            <input type="hidden" name="id_prof" value="<?php echo $prof['id_prof']; ?>">
                                            <button type="submit"  class="border border-0 ">
                                                <i class="far fa-edit text-primary"></i>
                                            </button>
                                        </form>
                                    
                                        <form method="post" class="mr-1" action="deleteProf">
                                            <input type="hidden" name="id_prof" value="<?php echo $prof['id_prof']; ?>">
                                            <button type="submit" name="delete" class="border border-0">
                                                <i class="far fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
    <!-- SCRIPT -->
    <script src="./Script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>