<?php
class Comunication {
    private $sender;
    private $recipient;
    private $message;


    public function __construct($sender, $recipient, $message){
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->message = $message;

    }



}

$prova = new Comunication ('Io','tu','ciao');
var_dump($prova)





?>