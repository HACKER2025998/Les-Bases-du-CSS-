<?php

if (isset($_POST['nom']) && isset($_POST['prenom'])) {
    $nom = $_POST['nom'];
    $email = $_POST['prenom'];

    echo "Nom reçu : $nom <br>";
    echo "prenom reçu : $prenom";
} else {
    die("Formulaire incomplet.");
}
?>