<?php
namespace DQNEO\MySQLTest;

class MySQLTest extends \PHPUnit\Framework\TestCase
{
    private function getPDO()
    {
        $pdo = new \PDO($GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASS']);
        return $pdo;
    }

    public function testConnect()
    {
        $pdo = $this->getPDO();
        $this->assertTrue(is_object($pdo));
    }

    public function testSQL1()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare('SELECT 1');
        $ret = $stmt->execute();
        $this->assertTrue($ret);
    }
}
