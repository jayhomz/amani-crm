<?php
    session_start();
    include_once('../private/connect-db.php');
    include_once('../private/functions.php');
?>

<!doctype html>
<html>
<head>
	  <meta charset="UTF-8">
	  <title> Amani CRM </title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
</head>
<body>
<div id="container"> 
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
		<a class="navbar-brand" href="index.php">Amani CRM</a>
	</nav>
</div>


<div class="container">
  <div class="row">
    <table class="table table-striped mt-5">
    <thead>
        <tr>
        <th scope="col">Name
        </th>
        <th scope="col">Interest</th>
        <th scope="col">Back Up devices</th>
        <th scope="col">Email Address</th>
        <th scope="col">Is backup, important</th>
        <th scope="col">Keep data offsite</th>
        <th scope="col">Appointment Date</th>
        <th scope="col">Appointement time</th>                     
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php 
            select_items();
            while ($users = mysqli_fetch_assoc($result)) {
        ?>

        <th scope="row">
        
            <?php
          
            $clientid = $users['client_id'];  
            
            if($clientid == 1) {
                echo('John');
            } elseif ($clientid == 2) {
                echo('Ann');

                } elseif($clientid == 3) {
                    echo('Mary');
                    }

            ?>
            
        </th>
        
            
        <td><?php echo($users['interest']) ?></td>
        <td><?php echo($users['backup_devices']) ?>t</td>
        <td><?php echo($users['email']) ?></td>
        <td><?php echo($users['backup_important']) ?></td>
        <td><?php echo($users['offsite']) ?></td>
        <td><?php echo($users['appointement_day']) ?></td>
        <td><?php echo($users['appointement_time']) ?></td>
        </tr>

        <?php }
         mysqli_free_result($result);
        ?>
    </tbody>
    </table>
    </div><!--row-->
</div><!-- container -->


<?php include('footer.php') ?>