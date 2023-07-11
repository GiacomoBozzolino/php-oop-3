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

    // CHILD CLASS
    // CLASSE MAIL
    class Email extends Comunication{
        private $notification;
        public $print;

        public function __construct(string $_sender, string $_recipient, string $_message, bool $notification){
            parent::__construct($_sender, $_recipient, $_message);
            $this->notification = $notification;

        }
        public function sendMessage(){
                return "email inviata";
            }

        // funzione  rispsota email
        public function setResponse () {
            if ($this->notification === true ) {
                echo $this->sendMessage();
            }
            else {
                echo "email non inviata";
            }
        }
        // funzione stampa
        public function setPrint () {
            if ($this->print === true ) {
                echo 'email stampata';
            }
            
        }

        public function getPrint (){
            return $this->print;
        }


    
    }


    // CLASSE MESSAGE
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


    // ISTANZE DI PROVA
    $prova = new Comunication ('Io','tu','addio');
    var_dump($prova);
   

    $email_1 = new Email ('Io','tu','ciao amico',true);
    $email_1->setResponse();
    $email_1->print = false;
    $email_1->setPrint();
    

    $email_2 = new Email ('Io','tu','ciao amico',false);
    $email_2->setResponse();
    



  





?>