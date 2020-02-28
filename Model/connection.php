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
            //driver=? you want to use; you always use the PDO class name. The constructor accepts parameters for
            // specifying the database source (known as the DSN, Data Source Name) and optionally for the username and
            // password (if any).
            //so PDO, a base class, is a constructor??
            $dsn = "mysql:host=" . $this->dbhost . ";dbname=" . $this->db . ";charset=" . $this->charset;
            //PDO, a base class, is a more like a data access layer which uses a unified API (Application Programming
            // Interface)
            $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);
            //
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //
            return $pdo;
        } catch (\Exception $e) {
            echo "Connection failed:" . $e->getMessage();
        }

    }

}

//Dit is de naam die door toepassingen gebruikt om verbinding te maken met een ODBC-gegevensbron.
// Met andere woorden, is het een symbolische naam die de ODBC-verbinding vertegenwoordigt. Details
// van de verbinding, zoals de naam van de database, directory databasestuurprogramma, gebruikers-id,
// wordt opgeslagen wachtwoord, enz., bij het maken van een verbinding met de ODBC.

//Hier vindt u de verschillende soorten typen ODBC-gegevensbronnen:
//1.systeems-, 2.gebruikers, en 3.bestands DSN

/*The PDO_MYSQL Data Source Name (DSN) is composed of the following elements
DSN prefix
    The DSN prefix is mysql:.

host
    The hostname on which the database server resides.
port
    The port number where the database server is listening.
dbname
    The name of the database.
unix_socket
    The MySQL Unix socket (shouldn't be used with host or port).
charset
    The character set. See the character set concepts documentation for more information
*/