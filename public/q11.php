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
            <form action="email.php" method="post">
                <div class="form-group">

                <label for="text" class="mt-2">Kindly assist us with your email address to sent an appointment invite whereby one of our representatives will visit you and take you through the process of registration / set up and get you ready for the services</label> <br />
            <?php
                if(isset( $_SESSION["errors"])) {
                    echo( $_SESSION["errors"]);
                    $_SESSION["errors"] = null;
                }
            ?>
                <label for="email">Input email address: </label>
                <input type="email" name="email" placeholder="name@email.com" required >
                <button type="submit" name="submit" class="btn btn-sm btn-primary" style="width: 20%;">Continue</button>

                </div><!-- form-group --> 
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

<script>
    document.getElementById("btn").onclick = clickHandler;

    function clickHandler() {
        var ans = confirm('Shall we Continue');

        if(ans == true) {
            alert("yes");
        } else {
            alert("no");
        }

    }
</script>

<?php include('footer.php') ?>
