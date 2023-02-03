<?php

include "../Methods/Methods.php";
if (isset($_GET['id'])) {
    $offre = getOffreInfo($_GET['id']);
    $entrepriseInfo = getEntrInfo($offre->id_entreprise);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail d'offre</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once 'header.php' ?>
    <div class="container my-5">
        <!-- info sur l'entreprise -->
        <div class="rounded shadow px-5 pb-3">
            <div class="row align-items-center border-bottom pb-5">
                <div class="col-8">
                    <h2 class="fw-bold border-2  border-bottom pb-2"><?= $entrepriseInfo->nom_entreprise ?></h2>
                    <table>
                        <tr>
                            <td class="fw-bold h5 pe-5">Secteur D'activite</td>
                            <td class="pe-3">:</td>
                            <td><?= $entrepriseInfo->secteur_activite ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold h5 pe-5">Offres d'emploi :</td>
                            <td class="pe-3">:</td>
                            <td>
                                <a href="entrepriseOffres.php?id_entreprise=<?= $entrepriseInfo->id_entreprise ?>" class="text-info text-decoration-none">voir tous nos annonces</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-4">
                    <img class="w-75 h-75" src="<?= $entrepriseInfo->logo_entreprise ?>">
                </div>
            </div>
            <div class="pt-3">
                <h5 class="fw-bold">Description de l'entreprise</h5>
                <p>
                    <?= $entrepriseInfo->description_ ?>
                    <a href="detailEntreprise.php?id_entreprise=<?= $entrepriseInfo->id_entreprise ?>" class="text-info text-decoration-none">lire la Suite</a>
                </p>
            </div>
        </div>
        <!-- info sur l'innonce -->
        <div class="rounded shadow p-5 mt-4">
            <div>
                <h2 class="fw-bold border-2  border-bottom pb-4">Détails de l'annonce</h2>
                <h5 class="fw-bold">Poste proposé : <?= $offre->post_proposer ?></h5>
                <h5 class="fw-bold">Profil recherché pour le poste :</h5>
                <p><?= $offre->description_ ?></p>
            </div>
            <div>
                <h5 class="fw-bold">Critères de l'annonce pour le poste</h5>
                <table>
                    <tr>
                        <td class="fw-bold h6 pe-5">Pays</td>
                        <td class="fw-bold pe-3">:</td>
                        <td><?= $offre->pays ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold h6 pe-5">Ville</td>
                        <td class="fw-bold pe-3">:</td>
                        <td><?= $offre->ville ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold h6 pe-5">Niveau d'expérience</td>
                        <td class="fw-bold pe-3">:</td>
                        <td><?= $offre->Niveau_experience ?> ans d'Expérience</td>
                    </tr>
                    <tr>
                        <td class="fw-bold h6 pe-5">Niveau d'études</td>
                        <td class="fw-bold pe-3">:</td>
                        <td>Bac + <?= $offre->Niveau_etudes ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold h6 pe-5">Langues exigées</td>
                        <td class="fw-bold pe-3">:</td>
                        <td><?= $offre->Langues_exigees ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold h6 pe-5">Nombre de poste(s) </td>
                        <td class="fw-bold pe-3">:</td>
                        <td><?= $offre->Nbrposte ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <a href="#" class="btn btn-success ">Postuler</a>

</body>

</html>