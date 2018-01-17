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

                <label for="client name" class="mt-2">Its about Angani and the benefits your company can acquire from us working together. Which is offering a solution that will significantly reduce your IT infrastructure costs while ensuring reliability and enhanced security through the services we offer. Are you interested?</label> <br />

                 <!-- <input type="radio" name="radio" value="yes" id="yes"> Yes <br /> -->

                </div><!-- form-group -->

                    <a href="q4.php" class="btn btn-primary mt-2">Yes</a>
                    <a href="response.php?response=Call Back or Not Interested" class="btn btn-primary mt-2">No</a>
     
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
