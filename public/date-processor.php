<?php
    session_start();
    include_once('../private/connect-db.php');
    include_once('../private/functions.php');

?>

<?php
    if( isset($_POST["submit"])) {
?>

<?php

$date = $_POST["date"];
$time = $_POST["time"];

update_call_back_time($date, $time);

redirect_to("thanks.php");

} else {
    redirect_to("index.php");
}
?>
