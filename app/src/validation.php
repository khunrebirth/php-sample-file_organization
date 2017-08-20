<?php

use Respect\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;

function validateDate($dateString)
{
  
  $dateValidator = Validator::date('d-m-Y')->notEmpty();

  try {
    $dateValidator->assert($dateString);    
    $dateTime = strtotime($dateString);
    return date('F jS Y', $dateTime);
  } catch (NestedValidationException $e) {
    return $e->getMessages();
  }

}
