
<?php

try {
    $handler=new PDO ('mysql:host=localhost;dbname=CV2020;charset=utf8', 'phpadmin', 'Kblsrfrs.99');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
    echo $e->getMessage();
    die();
} 

?>
