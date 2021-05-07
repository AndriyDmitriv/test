<?php
$connectionDB = mysqli_connect (

    "localhost" , // Назва хоста

    "inventar_it" , // Користувач

    "08lns19lok@" , // Пароль користувача

    "inventar_it"  // Назва баз даних
);


 if ( mysqli_connect_errno ()) {

    echo  "Неможливо підключити до MySQL:" . MySQLi_connect_error ();

}
?>