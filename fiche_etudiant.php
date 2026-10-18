<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche étudiant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<?php

$nom = "Rana Essadi";  
$filiere = "Info";            
$moyenne = 14.53;              
$estBoursier = true;          
$anneeEtude = 2;             


if ($moyenne >= 10) {
    $statut = "Admis(e)";
} else {
    $statut = "Non admis(e)";
}


switch ($filiere) {
    case "Info":
        $labelFiliere = "Informatique";
        $classeBadge  = "badge-info";
        break;
    case "Elec":
        $labelFiliere = "Électronique";
        $classeBadge  = "badge-elec";
        break;
    default:
        $labelFiliere = "Filière inconnue";
        $classeBadge  = "badge-defaut";
}
?>

<div class="fiche">
    <h1><?php echo $nom; ?></h1>

    <span class="badge <?php echo $classeBadge; ?>">
        <?php echo $labelFiliere; ?>
    </span>

    <p>Année <?php echo $anneeEtude; ?> — Moyenne : <?php echo $moyenne; ?>/20</p>

    <p><?php echo $statut; ?></p>

    <?php if ($estBoursier) { ?>
        <p>🎓 Étudiant boursier</p>
    <?php } ?>
</div>

</body>
</html>
