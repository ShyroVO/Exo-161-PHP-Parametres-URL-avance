<?php

if (isset($_GET['age'], $_GET['nom'])){
    echo "Hey coucou " . $_GET['prenom'] . " " . $_GET['nom'] . " / " . $_GET['age'];
}
else {
    echo "pas dage <br>";
    echo "Hey coucou " . $_GET['prenom'] . " " . $_GET['nom'];
}