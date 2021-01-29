<?php    
    class Products{
        /*********************************/
        /*           properties          */
        /*********************************/
        private $productId;
        private $productName;
        private $productPrice;
        private $productDescription;
        private $categoryType;

        /*********************************/
        /*           Construter          */
        /*********************************/
        function __construct($name, $price, $description, $type){
            $this->$productName = $name,
            $this->$productPrice = $price,
            $this->$productDescription = $description,
            $this->$categoryType = $type
        }

        /*********************************/
        /*              Getter           */
        /*********************************/
        public function getProduct(){
            return 
            [
                $this->$productName,
                $this->$productPrice,
                $this->$productDescription,
                $this->$categoryType
            ];
        }

        public function getId(){
            return $this->$productId;
        }

        public function getName(){
            return $this->$productName;
        }

        public function getPrice(){
            return $this->$productPrice;
        }

        public function getDescription(){
            return $this->$productDescription;
        }

        public function getType(){
            return $this->$categoryType;
        }

        /*********************************/
        /*              Setter           */
        /*********************************/
        public function setProduct($name, $price, $description, $type){
            $this->$productName = $name;
            $this->$productPrice = $price;
            $this->$productDescription = $description;
            $this->$categoryType = $type;
        }

        public function setName($name){
            $this->$productName = $name;
        }

        public function setPrice($price){
            $this->$productPrice = $price;
        }

        public function setDescription($descriptsion){
            $this->$productDescription = $description;
        }

        public function setType($type){
            $this->$categoryType = $type;
        }
    }

?>





<?php
// public function createProduct($name, $price, $deskri, $type){
//     $sql = "insert into product (name, price, description, categoriType) values ('cp', 12.00, 'kan tages med på farten', 1)"

//     // så 1 er referecen til categori class'en, ved at den bliver forbundet i databasen
// }
?>