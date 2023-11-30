<?php

// se connecte a la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=base_gsb', 'root', '');

// 2 requetes
$statement=$pdo->query("select * from visiteur ");
$statement2=$pdo->query("select * from fichefrais ");

// 3 . Recupere
$visiteurs=$statement->fetchAll(PDO::FETCH_ASSOC);
$fichesfrais=$statement2->fetchAll(PDO::FETCH_ASSOC);
var_dump($visiteurs);
var_dump($fichesfrais);

// on recupere les 2 tableau
//On les affiche dans le formulaire avec les 2 listes deroulantes et le bouton ‘valide
?>
<form action="test2.php">
    <select name="" id="">
        <option value=""></option>
    </select>
    <select name="" id="">
        <option value=""></option>
    </select>
</form>