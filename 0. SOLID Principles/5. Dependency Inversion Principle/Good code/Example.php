<?php

interface ConnectionInterface
{
    public function connect();
}

class MySQLConnection implements ConnectionInterface
{
    public function connect()
    {
        var_dump('MySQL Connection');
    }
}

class PostgreSQLConnection implements ConnectionInterface
{
    public function connect()
    {
        var_dump('PostgreSQL Connection');
    }
}

class PasswordReminder
{
    /**
     * @var ConnectionInterface
     */
    private $dbConnection;

    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}