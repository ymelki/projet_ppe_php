
<form action="test2.php">
    <select name="" id="">
        <option value=""></option>
    </select>
    <select name="" id="">
        <option value=""></option>
    </select>

    <label for="pet-select">Choose a pet:</label>

    <select name="pets" id="pet-select">
        <?php foreach ($visiteurs as $visiteur) {
            $id=$visiteur['id'];
            ?>
           <option value="<?=$id ?>" > <?=$visiteur['prenom'] ?> <?=$visiteur['nom'] ?></option>
        <?php } ?>
    </select>

</form>