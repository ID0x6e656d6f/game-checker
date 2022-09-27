<?php
session_start();
require_once('../connection/connection.php');
$db_selected = 'alezag74_gamechecker';
mysqli_select_db($connection, $db_selected);

$stato_login = 0; //serve come output per indicare errori o altro nel login
$nome_inserito = $_POST['username'];
$password_inserita = $_POST['password'];
$_SESSION["logged"]=0;

$search_user =  "select * from utenti where (nome, pass) = ('$nome_inserito', '$password_inserita')";
$result_ut = mysqli_query($connection, $search_user);
$num_ut = mysqli_num_rows($result_ut);

if($num_ut==1){
    $stato_login = 1;
    echo $stato_login;
    $_SESSION["name"] = $nome_inserito;
    $_SESSION["logged"] = 1;
}
else{
    $stato_login = 0;
    echo $stato_login;
    $_SESSION["logged"] = 0;
}

?>