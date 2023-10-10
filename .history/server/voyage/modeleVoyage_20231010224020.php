<?php

    require_once('../db/connexion.inc.php');
    function Mdl_Ajouter($voyage){
        global $connexion;
        $code = $voyage->getCode();
        $depart = $voyage->getDepart();
        $destination = $voyage->getDestination();
        $transporteur = $voyage->getTransporteur();

        $sqlInsertVoyage = "INSERT INTO voyages VALUES (0,?, ?, ?, ?, ?)";
        $sqlInsertConnexion = "INSERT INTO connexion VALUES (?,?, ?, 'M', 'A')";
        $sqlSelectVoyage = "SELECT * FROM voyages WHERE code = ?";
        try{

            //Tester si le couriel existe deja
            $stmt = $connexion->prepare($sqlSelectVoyage);
            $stmt->bind_param("s", $code);
            $stmt->execute();
            $reponse = $stmt->get_result();

            if($reponse->num_rows == 0){              
                $stmt = $connexion->prepare($sqlInsertVoyage);
                $stmt->bind_param("ssss",$code, $depart,$destination,$transporteur,);
                $stmt->execute();
                $idm = $connexion->insert_id;
                $msg = "Voyage crée";
            }else{
                $msg = "Ce code est déja utilisé";
            }

        }catch(Exception $e){
            $msg = "Erreur : ".$e->getMessage().'<br>';
        }finally{
            return $msg;
        }
        
    }
?>