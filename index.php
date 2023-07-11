<?php
    
    require_once __DIR__. '/models/Comunication.php';
    require_once __DIR__. '/models/Email.php';
    require_once __DIR__. '/models/Message.php';
    require_once __DIR__. '/models/Push.php';
    require_once __DIR__. '/models/Attached.php';
    require_once __DIR__. '/database/db.php';




    
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
                                    <?php echo $item->getNotification() ?>

                                </li>
                                <?php if ( get_class($item) === 'Email' ) {?>
                                <li>
                                    <?php echo $item->print ?>
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
                                    <li>
                                    <?php echo $item->click() ?>
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