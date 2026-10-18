<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<?php
$etudiants = [
    ["nom" => "Rana Essadi", "filiere" => "Info", "moyenne" => 14.53, "annee" => 2, "boursier" => true],
    ["nom" => "Amine Benali", "filiere" => "Elec", "moyenne" => 11.20, "annee" => 1, "boursier" => false],
    ["nom" => "Sara El Amrani", "filiere" => "Info", "moyenne" => 8.75, "annee" => 3, "boursier" => true],
    ["nom" => "Youssef Kadiri", "filiere" => "Elec", "moyenne" => 16.00, "annee" => 2, "boursier" => false],
];
?>

<main class="contenu">
    <h1>Liste des étudiants</h1>

    <table class="liste">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Filière</th>
                <th>Année</th>
                <th>Moyenne</th>
                <th>Statut</th>
                <th>Bourse</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant) { ?>
                <?php
                if ($etudiant["moyenne"] >= 10) {
                    $statut = "Admis(e)";
                } else {
                    $statut = "Non admis(e)";
                }

                switch ($etudiant["filiere"]) {
                    case "Info":
                        $labelFiliere = "Informatique";
                        $classeBadge = "badge-info";
                        break;
                    case "Elec":
                        $labelFiliere = "Électronique";
                        $classeBadge = "badge-elec";
                        break;
                    default:
                        $labelFiliere = "Filière inconnue";
                        $classeBadge = "badge-defaut";
                }
                ?>
                <tr>
                    <td><?php echo $etudiant["nom"]; ?></td>
                    <td><span class="badge <?php echo $classeBadge; ?>"><?php echo $labelFiliere; ?></span></td>
                    <td><?php echo $etudiant["annee"]; ?></td>
                    <td><?php echo $etudiant["moyenne"]; ?>/20</td>
                    <td><?php echo $statut; ?></td>
                    <td><?php echo $etudiant["boursier"] ? "Oui" : "Non"; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>

</body>
</html>
