<?php
    class Message extends Comunication{
        private $notification;
        public static $led = "green";
        public static $bell = "PLING";

        public function __construct(string $_sender, string $_title, string $_recipient, string $_message, bool $notification){
            parent::__construct($_sender,$_title, $_recipient, $_message);
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