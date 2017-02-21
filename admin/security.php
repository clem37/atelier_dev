<?php
require_once __DIR__ . '/../model/database.php';

session_start();

// Vérifie si l'utilisateur est connecté
if (isset($_SESSION['id'])) {
    // On récupère les infos de l'utilisateur en cours
    $user = getUser($_SESSION['id']);
} else if(isset($_POST['email']) && isset($_POST['password'])) {
    // Si l'utilisateur essaye de s'authentifier
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = getUserByEmailPassword($email, $password);
    if (isset($user['id'])) {
        // Authentifier l'utilisateur
        $_SESSION['id'] = $user['id'];
    }
}

/*
// Si l'utilisateur n'est pas authentifié
if (!isset($user['id'])) {
    // Redirection vers la page de login
    header("Location: ../login.php");
} elseif (!$user['admin']){ /* revient a dire == 0 donc pas admin */
    // redirection vers la page d'accueil */
    //header("Location: ../index.php");
//}