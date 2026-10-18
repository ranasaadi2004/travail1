<?php
$pages = [
    "fiche_etudiant.php" => "Fiche étudiant",
    "liste_etudiants.php" => "Liste des étudiants",
];
$pageCourante = basename($_SERVER["SCRIPT_NAME"]);
?>
<style>
    .navbar {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        padding: 14px 28px;
        background: #1565c0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .marque {
        color: #ffffff;
        font-size: 22px;
        font-weight: bold;
        text-decoration: none;
    }

    .navbar-liens {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 12px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .navbar-liens li {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .navbar-liens .bouton {
        display: inline-block;
        padding: 8px 16px;
        border: 2px solid #ffffff;
        border-radius: 6px;
        background: #0d47a1;
        color: #ffffff;
        font-size: 15px;
        font-weight: bold;
        text-decoration: none;
        white-space: nowrap;
    }

    .navbar-liens .bouton:hover,
    .navbar-liens .bouton.actif {
        background: #ffffff;
        color: #1565c0;
    }
</style>
<nav class="navbar">
    <a class="marque" href="fiche_etudiant.php">Fiches étudiants</a>
    <ul class="navbar-liens">
        <?php foreach ($pages as $fichier => $libelle) { ?>
            <li>
                <a class="bouton<?php if ($pageCourante === $fichier) { ?> actif<?php } ?>" href="<?php echo $fichier; ?>">
                    <?php echo $libelle; ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>
