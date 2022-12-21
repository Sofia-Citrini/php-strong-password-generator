<?php

function generateRandomPassword($number){
    $lowercaseLetters = "abcdefghilmnopqrstuvwyxz";
    $uppercaseLetters = "ABCDEFGHILMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $symbols = "!?@#$&*";

    $charPassword = $lowercaseLetters . $uppercaseLetters . $numbers . $symbols;

    $shuffleChar = str_shuffle($charPassword);

    $password = substr($shuffleChar, 0, $number);

    return $password;
}
?>