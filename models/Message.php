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
            $this->notification = "sms letto";
            }
    
        // funzione  rispsota email
        public function setResponse () {
            if ($this->notification === true ) {
                 $this->sendMessage();
            }
            else {
                $this->notification="sms non letto";
            }
        }

        public function getNotification (){
            return $this->notification;
        }


    }

?>