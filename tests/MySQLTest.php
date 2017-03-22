<?php
namespace DQNEO\MySQLTest;

class MySQLTest extends \PHPUnit\Framework\TestCase
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
}
