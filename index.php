<?php
//maintenant que nous avons insérer dans addarticle , le but va être d'afficher les 
//elèements ,enn faisant un secléct all de article dans ce cas précis

//je me connecte à ma base de donnée new blog

require './asset/src/connect.php';

//ensuite je pépare ma requête;
$req = $pdo->prepare('select * from article');
//ensuite je vais l'executer de ce pas 
$rst = $req->execute();
// ilfaut savoir qu'en faite la base de données est affcihé sous forme de tableau 
// si on fait un echo brute , cela va nous afficher une erreur; 

//pour ce faire ilnous faut une boucle pour pouvoir extraire les données !!

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/main.css">
    <title>setup PDO </title>
</head>

<body>
    <h1>ajouter des articles </h1>
    <form action="./addArticle.php" method="post" class="form">
        <label for="titre">titre</label>
        <input type="text" name="titre" id="titre">
        <label for="categorie">categorie</label>
        <input type="text" name="categorie" id="categorie">
        <label for="description">description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <button type="submit"> send </button>
    </form>
    <div>




        <?php
        //je vais extraire mes données ici !!
        if ($rst) {
            // je dis rst existe et vrai 

            $data = $req->fetchAll();
            //donc je vais extraire 
            foreach ($data as $article) {
                //et je parcous le tableau;
                echo '<h1>';
                echo $article['titre'];
                echo '</h1>';
                echo '<h3>';
                echo $article['categorie'];
                echo '</h3>';
                echo '<p>';
                echo $article['description'];
                echo '</p>';
                echo '<p>';
                echo $article['date_article'];
                echo '</p>';
            }
        }
        ?>

    </div>
</body>

</html>

<!-- 
    voilà pour le tuto pdo , maintenant c'est à vous d'aller plus loin , 
    je vous file les liens suivant pour la suite dub projet :
    insert
    - https://sql.sh/cours/insert-into
    delete
     -https://sql.sh/cours/delete
    update 
    https://sql.sh/cours/update

    à vous de jouer !!!

 -->