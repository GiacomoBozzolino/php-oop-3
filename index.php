<?php
    
    require_once __DIR__. '/models/Comunication.php';
    require_once __DIR__. '/models/Email.php';
    require_once __DIR__. '/models/Message.php';
    require_once __DIR__. '/models/Push.php';
    require_once __DIR__. '/models/Attached.php';


    
    // ISTANZE DI PROVA
    $email_1 = new Email ('Io','tu','ciao amico',true);
    $email_1->setResponse();
    $email_1->print = true;
    $email_1->setPrint();
    $email_1->attached = new Attached ('slide','300MB','PDF');
    var_dump($email_1);
    

    $sms = new Message ('Io','tu','ciao amico',true);
    $sms->setResponse();
    var_dump($sms)
    



  





?>