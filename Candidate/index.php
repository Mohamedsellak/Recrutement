<?php

include "../Methods/Methods.php";
$offres = getAll("offre");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condidate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body>

    <?php include_once 'header.php' ?>

    <div class="container my-5">
        <img src="" alt="">
        <h1 class="fw-bold">ALl Offres :</h1>

        <?php
        if ($offres !== -1) {
            foreach ($offres as $offre) {
                $entrepriseInfo = getEntrInfo($offre->id_entreprise);
        ?>
                <a href="detailDemande.php?id=<?= $offre->id_offre ?>" class="text-decoration-none text-dark">
                    <div class="card border border-info shadow-0 mb-3" style="width: 18rem;">
                        <img src="<?= $entrepriseInfo->logo_entreprise ?>" class="card-img-top">
                        <div class="card-header te"><?= $offre->title ?></div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $entrepriseInfo->nom_entreprise ?></h5>
                            <p class="card-text"><?= $offre->description_ ?></p>
                        </div>
                    </div>
                </a>
        <?php
            }
        }


        ?>

    </div>


</body>

</html>