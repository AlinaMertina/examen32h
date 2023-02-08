
<form action="<?php echo base_url('searcher/traitSearch'); ?>" method="post" style="margin-top:15%;margin-left:10%;">
    <p>
        <label>Mot cle</label>
        <input type="text" name="search"/>
        <select name="categorie">
            <?php for($i = 0; $i < count($Nom); $i++) { ?>
            <option value="<?php echo $idcategorie[$i]; ?>"><?php echo $Nom[$i]; ?></option>
            <?php } ?>
            <option value="0">All</option>
        <input type="submit" value="Rechercher"/>
        </select>
        <?php  
            if (isset( $_GET['error'])) { ?>
            <p><?php echo $_GET['error']; ?></p>
        <?php } ?>
    </p>
</form>