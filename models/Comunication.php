<?php
    // PARENT CLASS
    class Comunication {
        private $sender;
        private $recipient;
        private $message;
        public function __construct($sender, $recipient, $message){
            $this->sender = $sender;
            $this->recipient = $recipient;
            $this->message = $message;
        } 

        public function sendMessage(){
            return "mesaggio inviato";
        }
    }

?>