<?php
session_start();
require_once("../connection/connection.php");
$db_selected = 'alezag74_gamechecker';
mysqli_select_db($connection, $db_selected);

$stato_registrazione; //serve come output per indicare errori o altro nella registrazione



$name = $_POST['username']; //prendo l'username passato dalla pagina precedente
$password = $_POST['password']; //prendo la password passata dalla pagina precedente
$piattaforma = $_POST['platform'];

//----VERIFICA SE L'USERNAME è GIà SCELTO----
$num = false;
$s = "select * from utenti where nome = '$name'";
$result = mysqli_query($connection, $s);
$num = mysqli_num_rows($result);
if($num >= 1){
    $stato_registrazione = 3;
}

//----SE NON è SCELTO----
else{
    if(!preg_match("/^[a-zA-Z0-9_$-]*$/",$name)){ //ammette caratteri dalla a alla z , numeri e underscore (_)
        $stato_registrazione = 1;
    }
    else{
        $stato_registrazione = 0;
        $reg = "insert into utenti(nome, pass, platform, description) values ('$name', '$password', '$piattaforma', '')";
        mysqli_query($connection, $reg);
    }
}


echo $stato_registrazione;//manda questo dato alla pagina registrazione.php, con errore o successo
?>