<?php
    session_start();
    include_once('../private/connect-db.php');
    include_once('../private/functions.php');

?>

<?php
    if( isset($_POST["submit"])) {
        $_SESSION["errors"] = "";
?>

<?php
$text = $_POST['text'];

if(is_empty($text) == false) {
    redirect_to('q12.php');  
}

update_enquiry($text);
redirect_to('thanks.php');    
 

}
?>
