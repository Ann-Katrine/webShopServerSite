<?php
    class Deliveries{
        /*********************************/
        /*           properties          */
        /*********************************/
        private $deliveryId;
        private $deliveryType;

        /*********************************/
        /*           Constructer          */
        /*********************************/
        function __construct($type){
            $this->$deliveryType = $type;
        }
        
        /*********************************/
        /*              Getter           */
        /*********************************/
        public function getId(){
            return $this->$deliveryId;
        }

        public function getType(){
            return $this->$deliveryType;
        }

        /*********************************/
        /*              Setter           */
        /*********************************/
        public function setDeliveryType($type){
            $this->$deliveryType = $type;
        }

    }
?>