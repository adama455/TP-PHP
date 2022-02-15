
    
<link rel="stylesheet" href="../CSS/style.css">  

<?php
    session_start();
    echo '<h2>RESULTAT</h2><br><div class="container" style="font-size: 2rem;">';
    include ("fonction.php");
    if (isset($_POST['test'])) {
        $nombre= $_POST['nombre'];
        $_SESSION['post']=$_POST;
        $tabErr=[];
        validValeur($nombre,'nombre',$tabErr);

        if (count($tabErr)==0) {
            $tab=tabPremier($nombre);
            echo '<span class="champs-resultat"> Les nombres premier du tableau sont: </span>';
            echo affTab($tab);
            echo '<span class="champs-resultat"> La moyenne du tableau est: </span>';
            echo'<h3 style="color:white">'.moyTab($tab).'</h3>';
            echo '<span class="champs-resultat"> Les nombres inferieur à la moyenne du tableau sont: </span>';
            echo affTab(inferieurMoy($tab));
            echo '<span class="champs-resultat"> Les nombres superieur à la moyenne du tableau sont: </span>';
            echo affTab(superieurMoy($tab));

            
        } else {
            $_SESSION['err']=$tabErr;
            header('location:index.php');
            exit();
        }
        
    } else {
        header('location:index.php');
        exit();
    }
    
    echo '</div> ';  

?>

<div class="pagination" style="display: flex;justify-content: space-around;">
<a href="../exercice16/index.php">
    <button style="font-size:30px">Precedent
        <i class="material-icons"></i>
    </button>
</a>
<a href="../TP/index.php">
    <button style="font-size:30px">Suivant
        <i class="material-icons"></i>
    </button>
</a>
</div>

<?php 
include('/opt/lampp/htdocs/TP/footer.php'); 
?>
