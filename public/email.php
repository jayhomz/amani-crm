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
$email = $_POST['email'];

if(is_empty($email) == false) {
    redirect_to('q11.php');  
}

if(validate_email($email) == false) {
    redirect_to('q11.php');   
}

update_email($email);

redirect_to('q12.php');    
 



}
?>
