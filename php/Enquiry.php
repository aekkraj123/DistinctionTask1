<?php

namespace app;

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

}
?>