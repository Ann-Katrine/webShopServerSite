<?php
    class Order{
        /*********************************/
        /*           properties          */
        /*********************************/
        private $orderId;
        private $orderDate;
        private $orderLine = array();
        private $stateType;
        private $deliveryType;

        /*********************************/
        /*           Construter          */
        /*********************************/
        function __construct($date, $orderDetail, $stats, $delivery){
            $this->$orderDate = $date,
            $this->$orderLine = $orderDetail,
            $this->$stateType = $stats,
            $this->$deliveryType = $delivery
        }
        /*********************************/
        /*              Getter           */
        /*********************************/
        public function getOrder(){
            return
            [
                $this->$orderDetail;
                $this->$stateType;
                $this->$orderDate;
                $this->$deliveryType;
            ];
        }

        public function getId(){
            return $this->$orderId;
        } 

        public function getDate(){
            return $this->$orderDate;
        } 

        public function getOrderDetail(){
            return $this->$orderLine;
        } 

        public function getState(){
            return $this->$stateType;
        } 

        public function getDelevery(){
            return $this->$deliveryType;
        } 

        /*********************************/
        /*              Setter           */
        /*********************************/
        public function setOrder($date, $orderDetails, $state, $delivery){
            $this->$orderDate = $date;
            $this->$orderLine = $orderDetails;
            $this->$stateType = $state;
            $this->$deliveryType = $delivery;
        }

        public function setDate($date){
            $this->$orderDate = $date;
        }
        public function setOrderLine($orderDetails){
            $this->$orderLine = $orderDetails;
        }
        public function setState($state){
            $this->$stateType = $state;
        }
        public function setDelevery($delivery){
            $this->$deliveryType = $delivery;
        }
    }
?>