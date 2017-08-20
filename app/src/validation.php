<?php

use Respect\Validation\Validator;

function validateDate($dateString)
{
 if ($time = strtotime($dateString)) {
   return date('F jS Y', $time);
 } else {
   return "$dateString dose not look valid.";
 }
}
