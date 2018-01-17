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
            <form method="post" action="q6-processor.php">
                <div class="form-group">

                <label for="client name" class="mt-2">So I believe securing your business information is extremely critical. How do you back up your business data? (prod further to ascertain methods – physical drives, cloud etc.) What systems do you currently use?</label> <br />

                 <input type="radio" name="system" value="physical drives" checked="checked"> Physical drives <br />
                 <input type="radio" name="system" value="cloud"> Cloud <br />
                 <label for="text">Others</label>
                 <input type="text" name="text" placeholder="Other systems..,"> <br />
                  <hr>                

                </div><!-- form-group -->

                <div class="form-group">

                <label for="client name" class="mt-2">With that <?php echo($_SESSION["clientName"]) ?>, you do agree that your business data is extremely important for your business & needs back up?</label> <br />

                 <input type="radio" name="agree" value="agree" checked="checked"> Agree <br />
                 <input type="radio" name="agree" value="disagree"> Disagree <br />
                  <hr>                

                </div><!-- form-group -->

                <div class="form-group">

                <label for="client name" class="mt-2">Ok. And you do agree that ensuring that, it’s backed up automatically in a secure, off site location gives you a piece of mind that your business info is safe?</label> <br />

                 <input type="radio" name="offsite" value="agree" checked="checked"> Agree <br />
                 <input type="radio" name="offsite" value="disagree"> Disagree <br />
                  <hr>                

                </div><!-- form-group -->

                <div class="form-group">

                <label for="client name" class="mt-2">You also agree that that our service is very affordable, right?</label> <br />

                 <input type="radio" name="affordable" value="agree" checked="checked"> Agree <br />
                 <input type="radio" name="affordable" value="disagree"> Disagree <br />
                  <hr>                

                </div><!-- form-group -->

                <div class="form-group">

                <label for="client name" class="mt-2">Fantastic. If you’d so kind as to giving us an appropriate time in the week one of our business executives will come over to discuss the solution in detail</label> <br />

                 Date: <input type="date" name="date">
                 Time: <input type="time" name="time">
                 <button type="submit" name="submit" class="btn btn-sm btn-primary" style="width: 20%;">Submit</button><br>
                 <a href="response.php?response=Call Back or Not Interested" class="btn btn-sm btn-primary" >Not intersted</a>                                   

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

<?php include('footer.php') ?>
