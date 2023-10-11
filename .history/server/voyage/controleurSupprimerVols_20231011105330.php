<?php
    require_once('./includes/Voyage.php');
    require_once('./modeleVoyage.php');
    function Ctr_SupprimerVols(){

        $code = $_POST['code'];
        return Mdl_SupprimerVols();
    }
    $msg = Ctr_SupprimerVols();

    echo $msg;
?>
<br />
<a href="../../index.php">Retour a la page d'acceuil</a>