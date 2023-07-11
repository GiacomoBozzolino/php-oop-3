<?php
class Email extends Comunication{
    private $notification;
    public $print;
    public $attached;

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


?>