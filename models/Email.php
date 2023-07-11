<?php
class Email extends Comunication{
    private $notification;
    public $print;
    public $attached;
    public static $led = "yellow";
    public static $bell = "RING";

    public function __construct(string $_sender,$_title, string $_recipient, string $_message, bool $notification){
        parent::__construct($_sender,$_title, $_recipient, $_message);
        $this->notification = $notification;

    }
    public function sendMessage(){
        $this->notification = "email inviata";
        }

    // funzione  rispsota email
    public function setResponse () {
        if ($this->notification === true ) {
             $this->sendMessage();
        }
        else {
            $this->notification="email non inviata";
        }
    }
    // funzione stampa
    public function setPrint () {
        if ($this->print === true ) {
            $this->print ='email stampata';
        } else  {
            $this->print = "email non stampata";
        }
        
    }

    public function getPrint (){
        return $this->print;
    }
    public function getNotification (){
        return $this->notification;
    }

   

}


?>