<?php
    // PARENT CLASS
    class Comunication {
        private $sender;
        private $title;
        private $recipient;
        private $message;
        public static $bell = "DRIIIIN";

        public function __construct(string $sender, string $title, string $recipient, string $message){
            $this->sender = $sender;
            $this->title = $title;
            $this->recipient = $recipient;
            $this->message = $message;
        } 

        public function sendMessage(){
            return "mesaggio inviato";
        }

        public function getSender(){
            return $this->sender;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getRecipient(){
            return $this->recipient;
        }
        public function getMessage(){
            return $this->message;
        }
    }

?>