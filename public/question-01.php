<?php
    session_start();
    include_once('../private/connect-db.php');
    include_once('../private/functions.php');

    include('header.php');    
?>

<?php
  if(isset($_POST["submit"])) {

    if($_POST["clientName"] == "Choose...") {
        $_SESSION["errors"] = 'Select a client name';
        redirect_to("index.php");
        
    }

$clientName = $_POST["clientName"];
$_SESSION["clientName"] = $clientName;

$id = select_id($clientName);
$_SESSION["id"] = $id;
echo($id);

  } else {
    
    redirect_to("index.php");
        
  }

?>
<div class="container">
  <div class="row">

    <div class="card">
        <?php if( isset($_SESSION["errors"])) { ?>
            <div class="alert alert-danger mt-2">
                <?php
                    echo($_SESSION["errors"]);
                    $_SESSION["errors"] = null;
                ?>
            </div>
        <?php } ?>
        
        <div class="card-body">
            <form>
                <div class="form-group">

                <label for="client name" class="mt-2">My Name is Cynthia Calling you from Angani, could I speak to Mr/s <?php echo($clientName) ?></label> <br />

                 <!-- <input type="radio" name="radio" value="yes" id="yes"> Yes <br /> -->

                </div><!-- form-group -->

                    <a href="q3.php" class="btn btn-primary mt-2">Yes</a>
                    <a href="q2.php" class="btn btn-primary mt-2">No</a>

                <?php
                    mysqli_free_result($result);
                ?>      
            </form>   
        </div><!-- card-body -->
    </div><!-- card-->

    </div><!--row-->
</div><!-- container -->

<?php include('footer.php') ?>
