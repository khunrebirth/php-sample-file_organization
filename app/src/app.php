<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/validation.php';

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
    $date = validateDate($txtDate);

    // VALIDATE EMAIL
    if (filter_var($txtEmail, FILTER_VALIDATE_EMAIL)) {
      echo "<p>$txtEmail</p>";
    }

    // SANITIZE OUTPUT
    echo "<p>htmlspecialchars($txtDescription)</p>";
  }
}
