<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FormValidatorTest extends TestCase
{
    public function testCanBeInitialized()
    {
        $this->assertInstanceOf(
            FormValidator::class,
            new FormValidator()
        );
    }

    public function testSanitizeString()
    {
        $formValidator = new FormValidator();

        $this->assertEquals(
            'Mason Jason',
            $formValidator->sanitizeString('Mason Jason')
        );

        $this->assertEquals(
            'Mason Jason',
            $formValidator->sanitizeString('<h1>Mason Jason</h1>')
        );
    }

    public function testSanitizeEmail()
    {
        $formValidator = new FormValidator();

        $this->assertEquals(
            'test@test.com',
            $formValidator->sanitizeEmail('test@test.com')
        );

        $this->assertEquals(
            'test@test.com',
            $formValidator->sanitizeEmail('<test@test.com;')
        );
    }

    public function testIsValidEmail()
    {
        $formValidator = new FormValidator();

        $this->assertTrue(
            $formValidator->isValidEmail('test@test.com')
        );

        $this->assertFalse(
            $formValidator->isValidEmail('<test@test.com;')
        );
    }

    public function testTrimString()
    {
        $formValidator = new FormValidator();

        $this->assertEmpty(
            $formValidator->trimString('            ')
        );

        $this->assertEquals(
            'test@test.com',
            $formValidator->trimString(' test@test.com ')
        );
    }
}
