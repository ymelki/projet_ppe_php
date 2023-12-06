
<form action="index.php?uc=validerfrais&action=afficheFrais" method="POST"> 

    <label for="pet-select">Choisir un visiteur :</label>

    <select name="visiteur_form" id="pet-select">
        <?php foreach ($visiteurs as $visiteur) {
            $id=$visiteur['id'];
            ?>
           <option value="<?=$id ?>" > <?=$visiteur['prenom'] ?> <?=$visiteur['nom'] ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="envoyé">

</form>