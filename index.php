<?php
    
    require_once __DIR__. '/models/Comunication.php';
    require_once __DIR__. '/models/Email.php';
    require_once __DIR__. '/models/Message.php';
    require_once __DIR__. '/models/Push.php';
    require_once __DIR__. '/models/Attached.php';



    // ISTANZE DI PROVA
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
    $push_2 = new Push ('Gmail','Bolletta','tu','ti tocca pagare',true, 'questa è un icona (ma proprio un\'icona vera)');
   


    $comunicationArray =[
        $email_1,
        $email_2,
        $sms_1,
        $sms_2,
        $push_1,
        $push_2
    ]
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>OOP - 3</title>
</head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>OOP COMUNICATIONS</h1>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <?php foreach ($comunicationArray as $item ) { ?>
                    <div class="col-6">
                        <div class="card">
                            <ul>
                                <li>
                                   Mittente: <?php echo $item->getSender() ?>
                                </li>
                                <li>
                                   Oggetto: <?php echo $item->getTitle() ?>
                                </li>
                                <li>
                                    Destinatario: <?php echo $item->getRecipient() ?>
                                </li>
                                <li>
                                   Messaggio: <?php echo $item->getMessage() ?>

                                </li>
                                <li>
                                    <?php echo $item->setResponse() ?>

                                </li>
                                <?php if ( get_class($item) === 'Email' ) {?>
                                <li>
                                    <?php echo $item->setPrint() ?>
                                </li>
                                <li>
                                    Allegato:
                                    <?php if ( $item->attached != null) {
                                        echo $item->attached->getName();
                                        echo $item->attached->getSize();
                                        echo $item->attached->getType(); 
                                    } else{
                                        echo 'nessun allegato';
                                    }
                                        ?>
                                </li>
                                <?php } ?>
                                <?php if ( get_class($item) === 'Push' ) {?>
                                <li>
                                    <?php echo $item->getIcon() ?>
                                </li>
                                
                                <?php } ?>
                                <li>
                                    il led è di colore:
                                    <?php echo $item:: $led ?>
                                </li>
                                <li>
                                    <?php echo $item:: $bell ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>
        
    </body>
</html>