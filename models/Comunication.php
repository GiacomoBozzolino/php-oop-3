<?php
    // PARENT CLASS
    class Comunication {
        private $sender;
        private $recipient;
        private $message;
        public static $bell = "DRIIIIN";

        public function __construct(string $sender, string $recipient, string $message){
            $this->sender = $sender;
            $this->recipient = $recipient;
            $this->message = $message;
        } 

        public function sendMessage(){
            return "mesaggio inviato";
        }
    }

?>