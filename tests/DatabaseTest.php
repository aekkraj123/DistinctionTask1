<?php

use App\Database;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testCanBeInitialized()
    {
        $this->assertInstanceOf(
            Database::class,
            new Database("root", "", "swe20001_dt")
        );
    }

    public function testInsert()
    {
        $queryMock = $this->getMockBuilder(PDOStatement::class)
            ->getMock();
        $queryMock->method('execute')->willReturn(true);

        $dbMock = $this->getMockBuilder(PDO::class)
            ->disableOriginalConstructor()
            ->setMethods(['lastInsertId', 'prepare'])
            ->getMock();
        $dbMock->method('lastInsertId')->willReturn(10);
        $dbMock->method('prepare')->willReturn($queryMock);

        $dbClass = new Database("", "");
        $dbClass->setDB($dbMock);
        $this->assertEquals(10, $dbClass->insert("test", array(array())));
    }
}