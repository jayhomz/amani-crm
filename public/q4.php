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

                <label for="client name" class="mt-2">Thank you <?php echo($_SESSION["clientName"]) ?>, Have you heard about Angani?</label> <br />
                <label>Angani is a backup service provider that offers you affordable & secure backup solutions. It also offers leased server services so customers don’t have to invest in physical servers in their offices which are managed by Angani, 24/ 7</label> <br />

                <label>What's your take on these Angani Services?</label><br />

                 <!-- <input type="radio" name="radio" value="yes" id="yes"> Yes <br /> -->

                </div><!-- form-group -->

                    <a href="q6.php" class="btn btn-primary mt-2">Excellent</a>
                    <a href="q6.php" class="btn btn-primary mt-2">Good</a>
                    <a class="btn btn-primary mt-2" id="btn" style="color: #fff;">Bad</a>                  
                    <a class="btn btn-primary mt-2" id="btn2" style="color: #fff;">Poor</a>                  
                                      
     
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
    document.getElementById("btn2").onclick = clickHandler;    

    function clickHandler() {
        var ans = confirm('Shall we Continue');

        if(ans == true) {
            window.location.href = "q6.php";
        } else {
            window.location.href = "response.php?response=Not Interested" ;          
        }

    }
</script>

<?php include('footer.php') ?>
