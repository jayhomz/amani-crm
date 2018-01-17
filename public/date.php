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
            <form action="date-processor.php" method="post">
                <div class="form-group">

                <label for="text" class="mt-2">When will <?php echo($_SESSION["clientName"]) ?> be availble</label> <br /> <br />

                Date: <input type="date" name="date">
                Time: <input type="time" name="time">                
                <button type="submit" name="submit" class="btn btn-sm btn-primary" style="width: 20%;">Submit</button><br>              

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

<?php include('footer.php') ?>
