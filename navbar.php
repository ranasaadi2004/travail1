<?php
$pages = [
    "fiche_etudiant.php" => "Fiche étudiant",
    "liste_etudiants.php" => "Liste des étudiants",
];
$pageCourante = basename($_SERVER["SCRIPT_NAME"]);
?>
<nav class="navbar">
    <a class="navbar-titre" href="fiche_etudiant.php">Fiches étudiants</a>
    <ul class="navbar-liens">
        <?php foreach ($pages as $fichier => $libelle) { ?>
            <li>
                <a href="<?php echo $fichier; ?>"<?php if ($pageCourante === $fichier) { ?> class="actif"<?php } ?>>
                    <?php echo $libelle; ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>
