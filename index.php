<?php

session_start();


$data = '  { "user" : [   
                 { "firstName" : "Vignesh",  
                   "lastName"  : "Prajapati",
                   "age"       : 23,
                   "email"     : ["vignesh@gmail.com","vignesh@yahoo.com"],
                   "subject"   : ["English","Gujarati", "Hindi"]
                 }, 

                 { "firstName" : "Vaibhav",  
                   "lastName"  : "Prajapati",
                   "age"       : 19,
                   "email"     : ["vaibhav@gmail.com","vaibhav@yahoo.com","vaibhav@aol.com"],
                   "subject"   : ["English","Spanish", "Chinese","Sanskrit"]
                 }
               ]
    } ';

$url_send ="http://webdevp.net/receive.php";
$str_data = json_encode($data);

$_SESSION["favcolor"] = $_REQUEST["test"];
header("Location:".$url_send);

?>
