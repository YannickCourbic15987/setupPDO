<?php
$dns = 'mysql:host=localhost;port=3306;dbname=newblog;charset=utf8';
$username = 'root';
$mdp = '';

$pdo = new PDO($dns, $username, $mdp);

// ici je me connecte en utilisant pdo qui permet de se connecter à n'importe 
//quel type de base de donnée ,et c'est beaucoup plus sécurisé que mysqli etc ; 
