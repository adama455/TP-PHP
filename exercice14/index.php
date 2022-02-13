
<?php
    include("controller.php");
?>

<form action="" method="post">
    <div>
        <textarea name="texte" rows="40" cols="95"></textarea>
        <button type="submit" name="correction">Correction</button>
    </div><br><br>
    <div class="container" style="display:flex ;justify-item:space-evenly">
        <div>
            <label for="">Correcte</label>
            <textarea name="numValide" rows="40" cols="95" valu="<?php echo $texte?>">
                <?php echo $numValide ?>
            </textarea>
        </div>
        <div>
            <label for="">Incorrecte</label>
            <textarea name="numNonValide" rows="40" cols="95" valu="<?php echo $texte?>">
                <?php echo $numNonValide ?>
            </textarea>
        </div>
    </div>
</form>




   