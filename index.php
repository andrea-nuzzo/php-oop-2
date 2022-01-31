<?php
    require_once __DIR__ . "/classes/Product.php";
    require_once __DIR__ . "/classes/User.php";
    require_once __DIR__ . "/classes/PremiumUser.php";

try{
    $users = [
        new User("wolverinenetwork","sibizoddozi-9649@yopmail.com","ND%gM"),
        new User("ranran","frauffoveujeugi-1122@yopmail.com","s%s4J"),
        new User("olaf","widdinneimuqui-3416@yopmail.com","7ke&J"),
        new PremiumUser("snowice","windy16@yopmail.com","72e@J")
    ];
}catch (Exception $e){
    echo "An exception was raised: *** {$e->getMessage()} ***";
}
    var_dump($users);
?>


<!-- ****CERCARE SOLUZIONE PER SOLLEVARE ECCEZIONI MULTIPLE **** -->