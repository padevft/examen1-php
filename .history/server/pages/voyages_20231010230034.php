<?php
    require_once('./includes/Voyage.php');
    require_once('./modeleVoyage.php');
    function Ctr_Liste(){
        return Mdl_Ajouter($voyage);
    }
    $msg = Ctr_Ajouter();

    echo $msg;
?>
<br />
<a href="../../index.php">Retour a la page d'acceuil</a>