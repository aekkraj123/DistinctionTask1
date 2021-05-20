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

  function get_fname()
  {
    return $this->fname;
  }

  function get_lname()
  {
    return $this->lname;
  }

  function get_email()
  {
    return $this->email;
  }

  function get_subject()
  {
    return $this->subject;
  }

  function get_message()
  {
    return $this->message;
  }

  function is_valid()
  {
    $validator = new FormValidator();
    $this->fname = $validator->sanitizeString($this->fname);
    $this->lname = $validator->sanitizeString($this->lname);
    $this->email = $validator->sanitizeEmail($this->email);
    $this->subject = $validator->sanitizeString($this->subject);
    $this->message = $validator->sanitizeString($this->message);
    
    if(!empty($this->fname) && 
      !empty($this->lname) &&
      $validator->isValidEmail($this->email) && 
      !empty($this->subject) && 
      !empty($this->message)){
      return true;
    }
    return false;
  }
}
?>