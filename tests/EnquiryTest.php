<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Enquiry;

final class EnquiryTest extends TestCase
{
   public function testGetFname()
   {
     $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
      $this->assertEquals("John", $enquiry->get_fname());
   }

   public function testGetLname()
   {
     $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
      $this->assertEquals("Doe", $enquiry->get_lname());
   }

   public function testGetEmail()
   {
     $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
      $this->assertEquals("JohnDoe@gmail.com", $enquiry->get_email());
   }

   public function testGetSubject()
   {
     $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
      $this->assertEquals("Subject", $enquiry->get_subject());
   }

   public function testGetMessage()
   {
     $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
      $this->assertEquals("Message", $enquiry->get_message());
   }

   public function testIs_valid()
   {
      $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
      $this->assertTrue($enquiry->is_valid());

      $enquiry2 = new Enquiry("John", "", "JohnDoe@gmail.com", "Subject", "");
      $this->assertFalse($enquiry2->is_valid());
   }
}