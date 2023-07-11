<?php
    Class Push extends Comunication{
        private $notification;
        private $icon;
        public static $led = "white";

        public function __construct(string $_sender, string $_recipient, string $_message, bool $notification, string $icon){
            parent::__construct($_sender, $_recipient, $_message);
            $this->notification = $notification;
        }

        public function sendMessage(){
                return "Hai una nuova notifica";
            }

        public function setResponse () {
            if ($this->notification === true ) {
                echo $this->sendMessage();
            }
            
        }

        public function click(){
            return 'Apro l\'app collegata alla notifica push';
        }



    }


?>