<?php
$email_1 = new Email ('Io','questa mail è stato un errore','tu','ciao amico',true);
$email_1->setResponse();
$email_1->print = true;
$email_1->setPrint();
$email_1->attached = new Attached ('slide ','300MB ','PDF ');


$email_2 = new Email ('News24','Newsletter','io','Questo è il bellissimo testo della newsletter',false);
$email_2->setResponse();
$email_2->print = false;
$email_2->setPrint();

$sms_1 = new Message ('Io','questo sms è stato uno sbaglio','tu','ciao amico',true);
$sms_1->setResponse();
$sms_2 = new Message ('Mamma','','Io','non fare tardi',false);
$sms_2->setResponse();

$push_1 = new Push ('Io','questa notifica è stato uno sbaglio','tu','ciao amico',true, 'questa è un icona (ma proprio un\'icona vera)');
$push_1->setResponse();
$push_2 = new Push ('Gmail','Bolletta','tu','ti tocca pagare',true, 'questa è un icona (ma proprio un\'icona vera)');
$push_2->setResponse();


$comunicationArray =[
    $email_1,
    $email_2,
    $sms_1,
    $sms_2,
    $push_1,
    $push_2
]

?>