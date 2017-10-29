<?php
namespace DQNEO\MySQLTest;

use PHPUnit\Framework\TestCase;

class MySQLTest extends TestCase
{
    private function getPDO() :\PDO
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


    public function testExecute()
    {
        $pdo = $this->getPDO();

        $sql = 'SELECT 1  LIMIT :limit  OFFSET :offset';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':limit', 2, \PDO::PARAM_INT);
        $stmt->bindValue(':offset', 3, \PDO::PARAM_INT);
        $res = $stmt->execute();
        $this->assertTrue($res);
    }

}
