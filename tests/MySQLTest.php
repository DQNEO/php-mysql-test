<?php
namespace DQNEO\MySQLTest;

class MySQLTest extends \PHPUnit\Framework\TestCase
{
    public function testConnect()
    {
        $pdo = new \PDO($GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASS']);
        $this->assertTrue(is_object($pdo));
    }
}
