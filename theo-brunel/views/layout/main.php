<!DOCTYPE html>
<html lang="fr">
<?php require 'views/components/head.php'; ?>
<body>
<div class="container">
    <?php require 'views/components/header.php'; ?>
    <?php
    switch ($_GET["page"]) {
        case LIVRE:
            require 'views/pages/livre-dor.php';
            break;
        case RESEAUX_SOCIAUX:
            require 'views/pages/page-reseaux-sociaux.php';
            break;
        case ACCUEIL:
        default:
            require 'views/pages/page-accueil.php';
            break;
    }
    ?>
</div>
</body>
</html>

