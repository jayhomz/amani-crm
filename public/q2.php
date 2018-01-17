<?php
    session_start();
    include_once('../private/connect-db.php');
    include_once('../private/functions.php');

    include('header.php');    
?>

<?php
    if( isset($_SESSION["clientName"])) {
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

                <label for="client name" class="mt-2">Can I talk to Mr/s <?php echo($_SESSION["clientName"]) ?> at some other date and time?</label> <br />

                 <!-- <input type="radio" name="radio" value="yes" id="yes"> Yes <br /> -->

                </div><!-- form-group -->

                    <a href="date.php" class="btn btn-primary mt-2">Yes</a>
                    <a href="response.php?response=not interested or not his number" class="btn btn-primary mt-2">No</a>
     
            </form>   
        </div><!-- card-body -->
    </div><!-- card-->

    </div><!--row-->
</div><!-- container -->

<?php 
}
else {
    redirect_to('question-01.php');
}
?>

<?php include('footer.php') ?>
