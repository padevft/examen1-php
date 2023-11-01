<?php
    require_once('./includes/Voyage.php');
    require_once('./modeleVoyage.php');
    function Ctr_SupprimerVols(){

        $code = $_POST['code'];
        return Mdl_SupprimerVols($code);
    }
    $msg = Ctr_SupprimerVols();

    $msg   
?>
<br />
<a href="../../index.php">Retourner à la page d'accueil</a>