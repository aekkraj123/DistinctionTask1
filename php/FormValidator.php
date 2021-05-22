<?php

namespace App;

class FormValidator
{
    public function __construct()
    {
    }

    public function sanitizeString(string $string): string
    {
        return filter_var($this->trimString($string), FILTER_SANITIZE_STRING);
    }

    public function trimString(string $string): string
    {
        return trim($string);
    }

    public function sanitizeEmail(string $email): string
    {
        return filter_var($this->trimString($email), FILTER_SANITIZE_EMAIL);
    }

    public function isValidEmail(string $email): bool
    {
        return filter_var($this->trimString($email), FILTER_VALIDATE_EMAIL);
    }

}
