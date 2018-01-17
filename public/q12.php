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

        <div class="card-body">
            <form action="more-info.php" method="post">
                <div class="form-group">

                <label for="text" class="mt-2">Is there any question you would like me to address with regards to our Services / or any clarification on the information I have given you?</label> <br /> <br />
            <?php
                if(isset( $_SESSION["errors"])) {
                    echo( $_SESSION["errors"]);
                    $_SESSION["errors"] = null;
                }
            ?>
                <label for="text">Input queries: </label>
                <input type="text" name="text">
                <button type="submit" name="submit" class="btn btn-sm btn-primary" style="width: 20%;">Submit</button><br>
                <a href="thanks.php" class="btn btn-sm btn-primary" style="width: 20%;">No questions</a>                

                </div><!-- form-group --> 
            </form>   
        </div><!-- card-body -->
    </div><!-- card-->

    </div><!--row-->
</div><!-- container -->

 <?php }
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
