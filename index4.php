<?php


if (isset($_GET['serveur'], $_GET['language'])){
    echo $_GET['language'] . " " . $_GET['serveur'];
}