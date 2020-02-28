<?php
declare(strict_types=1);

class openConnection
{
    private $dbpass;
    private $db;
    private $dbhost;
    private $dbuser;
    private $charset;

    function connection()
    {
        //maakt de connectie met de DB
        // Try to figure out what these should be for you
        //'$this' makes referral to the class connection
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
            //Connections are established by creating instances of the PDO base class. It doesn't matter which
            //driver you want to use; you always use the PDO class name. The constructor accepts parameters for
            // specifying the database source (known as the DSN) and optionally for the username and password (if any).
            $dsn = "mysql:host=" . $this->dbhost . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\Exception $e) {
            echo "Connection failed:" . $e->getMessage();
        }

    }

}


