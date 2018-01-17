<?php
    session_start();
    include_once('../private/connect-db.php');
    include_once('../private/functions.php');

    include('header.php');    
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
            <form method="post" action="question-01.php">
                <div class="form-group">
                <label for="client name" class="mt-2">Please select the clients Name</label>  

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="clientName">Options</label>
                        </div>

                        <select class="custom-select" name="clientName" id="clientName">
                            <option selected>Choose...</option>

                                <?php
                                    select_users();
                                    while ($users = mysqli_fetch_assoc($result)) {
                                ?>

                            <option value= "<?php echo($users['name']) ?>" ><?php echo($users['name']) ?></option>

                            <?php }
                                mysqli_free_result($result);

                            ?>

                        </select>

                    </div>
                </div><!-- form-group -->

                    <button type="submit" name="submit" class="btn btn-primary mt-2">Continue</button>
            </form>   
        </div><!-- card-body -->
    </div><!-- card-->

    </div><!--row-->
</div><!-- container -->

<?php include('footer.php') ?>