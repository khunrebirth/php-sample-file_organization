<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
  /****************************************
   * Validate to Do:
   * $date exists
   * $email exists
   * $description exists
   * remove whitespave ( using trim() )
   * sanitize output ( useing htmlspecialchars )
   * validate email
   * validate date
   */

  // GET DATA FROM REQUEST
  $txtDate        = trim($_POST['date']);
  $txtEmail       = trim($_POST['email']);
  $txtDescription = trim($_POST['desc']);

  // PROCESS DATA(s)
  if ( !empty($txtDate) && 
       !empty($txtEmail) && 
       !empty($txtDescription) ) {

    // VALIDATE TIME
    if ($time = strtotime($txtDate)) {
      echo $time;
    }

    // VALIDATE EMAIL
    if (filter_var($txtEmail, FILTER_VALIDATE_EMAIL)) {
      echo $txtEmail;
    }

    // SANITIZE OUTPUT
    echo htmlspecialchars($txtDescription);
  }
}