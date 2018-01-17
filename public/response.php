<?php
    session_start();
    include_once('../private/connect-db.php');
    include_once('../private/functions.php');

?>

<?php
    if( isset($_SESSION["clientName"]) && isset($_SESSION["id"])) {
?>

<?php
$response = $_GET['response'];
update_response($response);

 $thanks = "Well {$_SESSION['clientName']} thank you for your time, it's been a pleasure talking to you.
 If you have any further clarifications , feel free to contact our website www.angani.co or phone number 020 – 5230028. <br /> <br />Have a good day. Good bye";
 

 $_SESSION['thanks'] = $thanks ;
 redirect_to('thanks.php');
} else {
 redirect_to('index.php');    
}
?>
