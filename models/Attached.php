<?php

    class Attached {

        private $name;
        private $size;
        private $type;

        public function __construct(string $name, string $size, string $type){
            $this->name = $name;
            $this->size = $size;
            $this->type = $type;
        } 

        public function getName(){
            return $this->name;
        }
        public function getSize(){
            return $this->size;
        }
        public function getType(){
            return $this->type;
        }





    }


?>