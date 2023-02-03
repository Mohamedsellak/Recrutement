<?php

include "../Methods/Methods.php";

if (isset($_GET['id_entreprise'])) {
    $entrepriseInfo = getEntrInfo($_GET['id_entreprise']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail d'entreprise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body>

    <?php include_once 'header.php' ?>

    <div class="container my-5">
        <div class="rounded shadow p-5">
            <div class="row align-items-center border-bottom pb-5">
                <div class="col-8">
                    <h2 class="fw-bold border-2  border-bottom pb-4">Profil de l´entreprise</h2>
                    <table>
                        <tr>
                            <td class="fw-bold h5 pe-5">Entreprise</td>
                            <td class="pe-3">:</td>
                            <td><?= $entrepriseInfo->nom_entreprise ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold h5 pe-5">pays</td>
                            <td class="pe-3">:</td>
                            <td><?= $entrepriseInfo->pays ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold h5 pe-5">vile</td>
                            <td class="pe-3">:</td>
                            <td><?= $entrepriseInfo->ville ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold h5 pe-5">secteur d'activite</td>
                            <td class="pe-3">:</td>
                            <td><?= $entrepriseInfo->secteur_activite ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold h5 pe-5">site web</td>
                            <td class="pe-3">:</td>
                            <td>
                                <a target="blanc" href="https://<?= $entrepriseInfo->site_entreprise ?>" class="text-info text-decoration-none"><?= $entrepriseInfo->site_entreprise ?></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-4">
                    <img src="<?= $entrepriseInfo->logo_entreprise ?>" alt="" class="w-75 h-75">
                </div>
            </div>
            <div class="pt-3">
                <h5 class="fw-bold">Description de l'entreprise</h5>
                <p>
                    <?= $entrepriseInfo->description_ ?>
                </p>
                <a target="blanc" href="entrepriseOffres.php?id_entreprise=<?= $entrepriseInfo->id_entreprise ?>" class="btn btn-danger fw-bold my-4">Nos offres d'emploi</a target="_blanc">
            </div>
        </div>

    </div>


</body>

</html>