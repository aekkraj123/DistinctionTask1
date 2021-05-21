<?php

namespace app;
use App\FormValidator;
class Enquiry
{
    private $fname;
    private $lname;
    private $email;
    private $subject;
    private $message;

    function __construct($fname, $lname, $email, $subject, $message)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    function getFname()
    {
        return $this->fname;
    }

    function getLname()
    {
        return $this->lname;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getSubject()
    {
        return $this->subject;
    }

    function getMessage()
    {
        return $this->message;
    }

    function isValid(): bool
    {
        $validator = new FormValidator();
        $this->fname = $validator->sanitizeString($this->fname);
        $this->lname = $validator->sanitizeString($this->lname);
        $this->email = $validator->sanitizeEmail($this->email);
        $this->subject = $validator->sanitizeString($this->subject);
        $this->message = $validator->sanitizeString($this->message);

        if (!empty($this->fname) &&
            !empty($this->lname) &&
            $validator->isValidEmail($this->email) &&
            !empty($this->subject) &&
            !empty($this->message)) {
            return true;
        }
        return false;
    }
}

?>