<?php

    require_once('../db/connexion.inc.php');

    function Mdl_Liste(){
        global $connexion;

        $sqlSelectVoyage = "SELECT * FROM voyages";
        try{
            $stmt = $connexion->prepare($sqlSelectVoyage);
            $stmt->execute();
            $reponse = $stmt->get_result();

            $resultArray = array(); // Créez un tableau pour stocker les résultats

            if($reponse->num_rows == 0){     
                $msg = "Aucun voyage";
            }else{
                while ($row = $reponse->fetch_assoc()) {
                    $resultArray[] = $row;
                }
                return $resultArray;
            }
        }catch(Exception $e){
            $msg = "Erreur : ".$e->getMessage().'<br>';
        }finally{
            return $msg;
        }
        
    }

    function Mdl_ListeTransporteur(){
        global $connexion;

        $sqlSelectVoyage = "SELECT transporteur FROM voyages WHERE depart = ?";
        try{
            $stmt = $connexion->prepare($sqlSelectVoyage);
            $stmt->bind_param("s", 'Montreal');
            $stmt->execute();
            $reponse = $stmt->get_result();

            $resultArray = array(); // Créez un tableau pour stocker les résultats
            
            if($reponse->num_rows == 0){     
                $msg = "Aucun transporteur";
            }else{
                while ($row = $reponse->fetch_assoc()) {
                    $resultArray[] = $row;
                }
            }
        }catch(Exception $e){
            $msg = "Erreur : ".$e->getMessage().'<br>';
        }finally{
            return $msg;
        }
        
    }

    function Mdl_ListeCode(){
        global $connexion;

        $sqlSelectVoyage = "SELECT code FROM voyages";
        try{
            $stmt = $connexion->prepare($sqlSelectVoyage);
            $stmt->execute();
            $reponse = $stmt->get_result();

            $resultArray = array(); // Créez un tableau pour stocker les résultats
            
            if($reponse->num_rows == 0){     
                $msg = "Aucun code";
            }else{
                while ($row = $reponse->fetch_assoc()) {
                    $resultArray[] = $row;
                }
            }
        }catch(Exception $e){
            $msg = "Erreur : ".$e->getMessage().'<br>';
        }finally{
            return $msg;
        }
        
    }


    

    function Mdl_Ajouter($voyage){
        global $connexion;
        $code = $voyage->getCode();
        $depart = $voyage->getDepart();
        $destination = $voyage->getDestination();
        $transporteur = $voyage->getTransporteur();

        $sqlInsertVoyage = "INSERT INTO voyages VALUES (?, ?, ?, ?, ?)";
        try{              
                $stmt = $connexion->prepare($sqlInsertVoyage);
                $stmt->bind_param("ssss",$code, $depart,$destination,$transporteur,);
                $stmt->execute();
                $msg = "Voyage crée";
           

        }catch(Exception $e){
            $msg = "Erreur : ".$e->getMessage().'<br>';
        }finally{
            return $msg;
        }
        
    }
?>