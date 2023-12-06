<?php

// se connecte a la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=gsb', 'root', '');

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
<form action="test2.php" method="POST"> 

    <label for="pet-select">Choose a pet:</label>

    <select name="visiteur_form" id="pet-select">
        <?php foreach ($visiteurs as $visiteur) {
            $id=$visiteur['id'];
            ?>
           <option value="<?=$id ?>" > <?=$visiteur['prenom'] ?> <?=$visiteur['nom'] ?></option>
        <?php } ?>
    </select>  
    <input type="submit" value="Envoyé">
</form>
<?php
// test (formulaire) 
// index.php?uc=validerFrais&action=selectUser
// test2 (recuperation des donnée du formulaire)
// index.php?uc=validerFrais&action=afficheFrais
?>

<?php 
// select (HTML sans bootstrap et avec bootstrap),
// foreach PHP)
 ?>