<?php

namespace APP\Model;

class Validation
{
    public static function validateName($name): bool
    {
        return mb_strlen($name) > 4;
    }
    public static function validateNumber(float $number): bool
    {
        return $number > 0;
    }
    public static function validateEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    } 
    public static function validateContato(string $Contato): bool
    {
        return $Contato == 9;
    } 
}