<?php
    class Voyage{
        private $code;
        private $depart;
        private $destination;
        private $transporteur;

        function __construct($code,$depart, $destination, $transporteur) {
            $this->setCode($code);
            $this->setDepart($depart);
            $this->setDestination($destination);
            $this->setTransporteur($transporteur);
        }
    

        public function setCode($code) {
            $this->code = $code;
        }
    
        public function getCode() {
            return $this->code;
        }

        public function setDepart($depart) {
            $this->depart = $depart;
        }
    
        public function getDepart() {
            return $this->depart;
        }
    
        public function setDestination($destination) {
            $this->destination = $destination;
        }
    
        public function getDestination() {
            return $this->destination;
        }
    
        public function setTransporteur($transporteur) {
            $this->transporteur = $transporteur;
        }
    
        public function getTransporteur() {
            return $this->transporteur;
        }
    }

    
    
?>