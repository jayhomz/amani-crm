<?php
    session_start();
    include_once('../private/connect-db.php');
    include_once('../private/functions.php');

    include('header.php');    
?>

<?php if(isset($_SESSION['thanks'])) { ?>
<div class="container">
  <div class="row">

    <div class="card">
        <div class="card-body">

            <p>
                <?php
                    echo($_SESSION['thanks']);
                    $_SESSION["clientName"] = null;
                    $_SESSION["id"] = null;
                 ?>
            </p>

                </div><!-- form-group -->  
        </div><!-- card-body -->
    </div><!-- card-->

    </div><!--row-->
</div><!-- container -->

<?php }
    else {
        redirect_to('index.php'); 
    }
?>


<?php include('footer.php') ?>