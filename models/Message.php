<?php
    class Message extends Comunication{
        private $notification;

        public function __construct(string $_sender, string $_recipient, string $_message, bool $notification){
            parent::__construct($_sender, $_recipient, $_message);
            $this->notification = $notification;
        }

        public function sendMessage(){
                return "sms letto";
            }

        public function setResponse () {
            if ($this->notification === true ) {
                echo $this->sendMessage();
            }
            else {
                echo "sms non letto";
            }
        }

        
    }

?>