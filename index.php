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
    class Email extends Comunication{
        private $notification;

        public function __construct($_sender, $_recipient, $_message, $notification){
            parent::__construct($_sender, $_recipient, $_message);
            $this->notification = $notification;

        }
        public function sendMessage(){
                return "email inviata";
            }

        
            public function setResponse ($notification) {
                if ($this->notification === true ) {
                    echo $this->sendMessage();
                }
                else {
                   echo "email non inviata";
                }
            }
    
          

    }

    // ISTANZE DI PROVA
    $prova = new Comunication ('Io','tu','ciao');
    var_dump($prova);

    $email_1 = new Email ('Io','tu','ciao amico',true);
    $email_1->setResponse(true);
    

    $email_2 = new Email ('Io','tu','ciao amico',false);
    $email_2->setResponse(true);
    



  





?>