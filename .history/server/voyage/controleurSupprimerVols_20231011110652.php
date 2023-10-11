<?php
    require_once('./includes/Voyage.php');
    require_once('./modeleVoyage.php');
    function Ctr_SupprimerVols(){

        $code = $_POST['code'];
        // return $code;
        return Mdl_SupprimerVols($code);
    }
    $msg = Ctr_SupprimerVols();

    if($msg == '1'){
        header('Location : ./../pages//voyages.php');
    }else{
        echo $msg;
    }   
?>
<br />
<a href="../../index.php">Retour a la page d'acceuil</a>