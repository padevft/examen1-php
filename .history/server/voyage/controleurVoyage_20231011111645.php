<?php
    require_once('./includes/Voyage.php');
    require_once('./modeleVoyage.php');
    function Ctr_Ajouter(){

        $code = $_POST['code'];
        $depart = $_POST['depart'];
        $destination = $_POST['destination'];
        $transporteur = $_POST['transporteur'];

        $voyage = new Voyage($code, $depart, $destination, $transporteur);
        return Mdl_Ajouter($voyage);
    }
    $msg = Ctr_Ajouter();
    if($msg == '1'){
        header('Location: ./../pages/voyages.php');
        exit; 
    }else{
        echo $msg;
    }   
?>
<br />
<a href="../../index.php">Retour a la page d'acceuil</a>