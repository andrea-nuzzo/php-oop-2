<?php
    require_once __DIR__ . "/classes/Product.php";
    require_once __DIR__ . "/classes/User.php";
    require_once __DIR__ . "/classes/PremiumUser.php";

    //Dichiaro un array vuoto che conterra tutte le eccezioni sollevate.
    $errors = [];
    //Dichiaro un array vuoto che conterra tutte le eccezioni sollevate.
    $users = [];

    // Dichiaro un array con i dati degli utenti
    $data_users = [
        [
            "userID"=> 0,
            "firstName"=>"Mario",
            "lastName"=>"Bianchi",
            "email"=>"mariobianchi@gamil.com",
            "password"=>"1H5?*",
            "totalPurchases"=> 20,
        ],
        [
            "userID"=>1,
            "firstName"=>"Giovanni",
            "lastName"=>"Rossi",
            "email"=>"rossi.giovanni@gmail.com",
            "password"=>"fhJ492@",
            "totalPurchases"=>50,
        ],
        [
            "userID"=>2,
            "firstName"=>"Paolo",
            "lastName"=>"Verdi",
            "email"=>"P.verdi@gmail.com",
            "password"=>"kfIt59?",
            "totalPurchases"=>100,
        ],
    ];

    //Ciclo sui dati per creare gli utenti
    foreach ($data_users as $data_user){
        
        try {
            // Se lo storico di acquisti è inferiore a 50 allora sara un normale utente ...
            if($data_user['totalPurchases'] < 50){
                $users [] = new User($data_user['userID'], $data_user['firstName'],$data_use['lastName'],$data_user['email'],$data_user['password']);
            } 
            //... altrimenti sarà un utente premium
            else{
                $users [] = new PremiumUser($data_user['userID'], $data_user['firstName'],$data_user['lastName'],$data_user['email'],$data_user['password'], $data_user['totalPurchases']);
            }
            
        }catch (Exception $e){
            $errors[] = $e->getMessage();
        }
    }


    var_dump($users);
    var_dump($errors);

    $andrea = new User(5, "Andrea", "Rossi", "andrearossi@gmail.com", "ghrujeif");

    $andrea->newCreditCard(159648654264245, "11/25", 123);
    $andrea->newCreditCard(159648654264245, "11/25", 123);
    var_dump($andrea);

//     $creditcard = new CreditCard($user->firstname, )

//     $user->newCreditCard('11239u1293u091823', '11-11-2023');

?>


