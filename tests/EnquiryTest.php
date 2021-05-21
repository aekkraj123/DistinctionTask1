<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Enquiry;

final class EnquiryTest extends TestCase
{
    public function testGetFname()
    {
        $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
        $this->assertEquals("John", $enquiry->getFname());
    }

    public function testGetLname()
    {
        $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
        $this->assertEquals("Doe", $enquiry->getLname());
    }

    public function testGetEmail()
    {
        $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
        $this->assertEquals("JohnDoe@gmail.com", $enquiry->getEmail());
    }

    public function testGetSubject()
    {
        $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
        $this->assertEquals("Subject", $enquiry->getSubject());
    }

    public function testGetMessage()
    {
        $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
        $this->assertEquals("Message", $enquiry->getMessage());
    }

    public function testIsValid()
    {
        $enquiry = new Enquiry("John", "Doe", "JohnDoe@gmail.com", "Subject", "Message");
        $this->assertTrue($enquiry->isValid());

        $enquiry2 = new Enquiry("John", "", "JohnDoe@gmail.com", "Subject", "");
        $this->assertFalse($enquiry2->isValid());
    }
}