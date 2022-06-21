<?php

require("./asset/src/connect.php");

if (!empty($_POST['titre']) && !empty($_POST['categorie']) && !empty($_POST['description'])) {

    //je fais une condition pour éviter les erreurs undefined etc , j'utilise !empty pour si il est remplie et 
    //qu'il exite bien alors à ce moment là je vais faire ma requête !!!
    $titre = $_POST['titre'];
    $categorie = $_POST['categorie'];
    $description = $_POST['description'];
    // var_dump($_POST);


    // j'ajoute mes données à ma table !!!
    //faire hyper attention à l'ordre ,cela paut donner des petit bugs 
    $req = $pdo->prepare("insert into article (titre,description,categorie) values (?,?,?) ");
    $req->execute([$titre, $description, $categorie]);

    //pour ne pas qu'il reste dans une page vide ; je vais faire un header location qui va me renvoyer sur une autre page 

    header('location:index.php');
} else {

    //si le formulaire est vide ; alors je retourne sur la page d'accueil 
    header('location:index.php');
}
