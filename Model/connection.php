<?php
declare(strict_types=1);

class connection
{
    private $dbpass;
    private $db;
    private $dbhost;
    private $dbuser;
    private $charset;

    function openConnection()
    {
        // Try to figure out what these should be for you
        //$this makes referral to the class connection
        $this->dbhost = "localhost";
        $this->dbuser = "joeri";
        $this->dbpass = "becode";
        $this->db = "becode";
        $this->charset = "utf8mb4";
        /*
         Try to understand what happens here
            $pdo = new PDO('mysql:host='. $dbhost  . ';dbname='. $db, $dbuser, $dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
         Why we do this here
            return $pdo;
         */
        try {
            $dsn = "mysql:host=" . $this->dbhost . ";db=" . $this->db . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\Exception $e) {
            echo "Connection failed:" . $e->getMessage();
        }

    }

}


