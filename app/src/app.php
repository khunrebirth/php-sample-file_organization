<?php

require __DIR__ . '/../../vendor/autoload.php';

use Respect\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;

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

  // VALIDATE DATA(s)
  $dateValidator  = Validator::date('d-m-Y')->notEmpty();
  $emailValidator = Validator::email()->notEmpty();
  $descValidator  = Validator::stringType()->length(1, 750);
  
  try {
    $dateValidator->assert($txtDate);
    $emailValidator->assert($txtEmail);
    $descValidator->assert($txtDescription);

    echo date('F jS Y', strtotime($txtDate));
    echo $txtEmail;
    echo $txtDescription;

  } catch (NestedValidationException $e) {
    foreach ($e->getMessages() as $message) {
      echo "<article class='message is-danger'>
              <div class='message-header'>
                <p>Message</p>
                <button class='delete' aria-label='delete'></button>
              </div>
              <div class='message-body'>
                $message
              </div>
            </article>";
    }
  }

}
