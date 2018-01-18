<?php

function redirect_to($url) {
  header("Location:" . $url);
}

function is_empty($text) {
  if(empty($text)) {
    $_SESSION["errors"] .= "<li> Insert your name </li>";
    return false;
  }
}

function validate_email($mail) {
  if(!preg_match("/@/", $mail)) {
    $_SESSION["errors"] .= "<p class='alert alert-danger'> Insert your correct email address </li>";
    return false;
  }

}

function select_users() {
  global $connect;
  global $result;

  $query = "SELECT * FROM client_name";
  $result = mysqli_query($connect, $query);

  // see if query connection failed
  if(!$result) {
    die("Could not connect, try again later");
  }
}

function select_user() {
  global $connect;
  global $result;
  global $username;
  global $clientid;

  $clientid = $_SESSION["id"];  

  $query = "SELECT name FROM client_name WHERE id LIKE {$clientid} LIMIT 1";
  $result = mysqli_query($connect, $query);

  while($username = mysqli_fetch_assoc($result)) {
    $username = $username['name'];
    return $username;
  }

  // see if query connection failed
  if(!$result) {
    die("Could not connect, try again later");
  }

}

function select_id($client) {
  global $connect;
  global $result;
  global $id;

  $query = "SELECT * FROM client_name WHERE name LIKE '$client' LIMIT 1";
  $result = mysqli_query($connect, $query);

  while($name = mysqli_fetch_assoc($result)) {
    $id = $name['id'] ;
  }

  return $id;

  // see if query connection failed
  if(!$result) {
    die("Could not connect, try again later");
  }
}

function insert_response($response) {
  global $connect;
  global $result;
  
  $response = mysqli_real_escape_string($connect, $response); //escaping quotes
  $clientid = $_SESSION["id"];

  $query = "INSERT INTO clients_info (client_id, interest) ";
  $query .= "VALUES (";
  $query .= "{$clientid}, '{$response}'";
  $query .= ")";

  $result = mysqli_query($connect, $query);

  // see if query connection failed
  if(!$result) {
    die("Users record already entered"
      );
  }
}

function update_response($response) {
  global $connect;
  global $result;

  $response = mysqli_real_escape_string($connect, $response); //escaping quotes
  $clientid = $_SESSION["id"];
  
  $query = "UPDATE clients_info SET ";
  $query .= "interest = '{$response}' ";
  $query .= "WHERE client_id = {$clientid}";

  $result = mysqli_query($connect, $query);

  // see if query connection failed
  if($result) {
    
  } else {
      die("Database query failed");
    }
}

function update_enquiry($enquiry) {
  global $connect;
  global $result;

  $enquiry = mysqli_real_escape_string($connect, $enquiry); //escaping quotes
  $clientid = $_SESSION["id"];
  
  $query = "UPDATE clients_info SET ";
  $query .= "enquiry = '{$enquiry}' ";
  $query .= "WHERE client_id = {$clientid}";

  $result = mysqli_query($connect, $query);

  // see if query connection failed
  if($result && mysqli_affected_rows($connect) == 1) {
    
  } else {
      die("Database query failed");
    }
}

function update_email($email) {
  global $connect;
  global $result;

  $email = mysqli_real_escape_string($connect, $email); //escaping quotes
  $clientid = $_SESSION["id"];
  
  $query = "UPDATE clients_info SET ";
  $query .= "email = '{$email}' ";
  $query .= "WHERE client_id = {$clientid}";

  $result = mysqli_query($connect, $query);

  // see if query connection failed
  if($result && mysqli_affected_rows($connect) == 1) {
    
  } else {
      die("Database query failed");
    }
}

function update_q6($system, $text, $business_need_backup, $offsite, $affordable, $appointement_day, $appointement_time) {
  global $connect;
  global $result;

  $text = mysqli_real_escape_string($connect, $text); //escaping quotes
  $clientid = $_SESSION["id"];
  
  $query = "UPDATE clients_info SET ";
  $query .= "backup_devices = '{$system}', ";  
  $query .= "backup_devices = '{$text}', ";
  $query .= "backup_important = '{$business_need_backup}', ";
  $query .= "offsite = '{$offsite}', ";
  $query .= "affordable = '{$affordable}', ";
  $query .= "appointement_day = '{$appointement_day}', ";
  $query .= "appointement_time = '{$appointement_time}' ";      
  
  $query .= "WHERE client_id = {$clientid}";

  $result = mysqli_query($connect, $query);

  // see if query connection failed
  if($result && mysqli_affected_rows($connect) == 1) {
    
  } else {
      die("Database query failed");
    }
}

function update_call_back_time($date, $time) {
  global $connect;
  global $result;

  $clientid = $_SESSION["id"];
  
  $query = "UPDATE clients_info SET ";
  $query .= "call_back_date = '{$date}', ";
  $query .= "call_back_time = '{$time}' ";  
  $query .= "WHERE client_id = {$clientid}";

  $result = mysqli_query($connect, $query);

  // see if query connection failed
  if(!$result) {
    die("Database connection failed");
  }
}

function select_items() {
  global $connect;
  global $result;

  $clientid = $_SESSION["id"];

  $query = "SELECT * ";
  $query .= "FROM clients_info";

  $result = mysqli_query($connect, $query);

  // see if query connection failed
  if(!$result) {
    die("Database query failed");
  }

}

?>
