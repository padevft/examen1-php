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
                return "Aucun voyage";
            }else{
                while ($row = $reponse->fetch_assoc()) {
                    $resultArray[] = $row;
                }
                return $resultArray;
            }
        }catch(Exception $e){
            return "Erreur : ".$e->getMessage().'<br>';
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
                return "Aucun transporteur";
            }else{
                while ($row = $reponse->fetch_assoc()) {
                    $resultArray[] = $row;
                }

                return $resultArray;
            }
        }catch(Exception $e){
            return "Erreur : ".$e->getMessage().'<br>';
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
                return "Aucun code";
            }else{
                while ($row = $reponse->fetch_assoc()) {
                    $resultArray[] = $row;
                }

                return $resultArray;
            }
        }catch(Exception $e){
            return "Erreur : ".$e->getMessage().'<br>';
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
                return "1";           

        }catch(Exception $e){
            return "Erreur : ".$e->getMessage().'<br>';
        }
        
    }
?>