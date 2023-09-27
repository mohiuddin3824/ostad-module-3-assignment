<?php

function generatePassword($length)  
{
  $data = 'Mwt@0834iu76%67lsdf5';

  return substr(str_shuffle($data), 0, $length);
}
echo generatePassword(12) . "\n";


