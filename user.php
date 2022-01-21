<?php

if (isset($_GET['prenom'], $_GET['nom'])){
    echo $_GET['prenom'];
    echo $_GET['nom'];
}

if (isset($_POST['firstname'], $_GET['name'])){
    echo $_POST['firstname'];
    echo $_POST['name'];
}