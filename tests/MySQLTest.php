<?php
namespace DQNEO\MySQLTest;

use PHPUnit\Framework\TestCase;

class MySQLTest extends TestCase
{
    private function getPDO()
    {
        $pdo = new \PDO(getenv('DB_DSN'), getenv('DB_USER'), getenv('DB_PASS'));
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
