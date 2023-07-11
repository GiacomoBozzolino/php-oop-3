<?php
    Class Push extends Comunication{
        private $notification;
        private $icon;
        public static $led = "white";
        public static $bell = "TU-TU";

        public function __construct(string $_sender,string $_title, string $_recipient, string $_message, bool $notification, string $icon){
            parent::__construct($_sender,$_title, $_recipient, $_message);
            $this->notification = $notification;
            $this->icon = $icon;
        }

        public function sendMessage(){
            $this->notification = "Hai una nuova notifica";
            }
    
        // funzione  rispsota email
        public function setResponse () {
            if ($this->notification === true ) {
                 $this->sendMessage();
            }
            
        }

        public function getNotification (){
            return $this->notification;
        }

        public function click(){
            return 'Apro l\'app collegata alla notifica push';
        }

        public function getIcon (){
            return $this->icon;
        }



    }


?>