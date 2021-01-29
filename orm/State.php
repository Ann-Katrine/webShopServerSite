<?php
    class State{
        /*********************************/
        /*           properties          */
        /*********************************/
        private $stateId;
        private $StateType;

        /*********************************/
        /*           Constructer          */
        /*********************************/
        function __construct($type){
            $this->$StateType = $type
        }

        /*********************************/
        /*              Getter           */
        /*********************************/
        public function getId(){
            return $this->$stateId;
        }
        
        public function getStates(){
            return $this
        }

        /*********************************/
        /*              Setter           */
        /*********************************/


    }
?>