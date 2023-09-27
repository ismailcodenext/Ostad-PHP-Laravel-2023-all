<?php
$char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
function generatePassword($length)
{
    global $char;
    return substr(str_shuffle($char), 0, $length);
}

$password = generatePassword(12);
echo "Generated Password: $password";

?>