<?php
    class Categories{
        /*********************************/
        /*           properties          */
        /*********************************/
        private $categoryId;
        private $categoryType;

        /*********************************/
        /*           Construter          */
        /*********************************/
        function __construct($name){
            $this->$categoryType = $name
        }

        /*********************************/
        /*              Getter           */
        /*********************************/
        public function getId(){
            return $this->$categoryId;
        }

        public function getCategory(){
            return $this->$categoryType;
        }

        /*********************************/
        /*              Setter           */
        /*********************************/
        public function setName($name){
            $this->$categoryType = $name;
        }

    }
?>