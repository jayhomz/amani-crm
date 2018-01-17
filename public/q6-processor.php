<?php
    session_start();
    include_once('../private/connect-db.php');
    include_once('../private/functions.php');

?>

<?php
    if( isset($_POST["submit"])) {
?>

<?php
$system = $_POST["system"];
$text = $_POST["text"];
$business_need_backup = $_POST["agree"];
$offsite = $_POST["offsite"];
$affordable = $_POST["affordable"];
$appointement_day = $_POST["date"];
$appointement_time = $_POST["time"];

update_q6($system, $text, $business_need_backup, $offsite, $affordable, $appointement_day, $appointement_time);

redirect_to("q11.php");

}
?>
