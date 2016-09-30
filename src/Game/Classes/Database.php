<?php namespace Game\Classes;

use PDO;

class Database {

    protected $db;

    /**
     * Setup storage in memory
     */
    function __construct()
    {
        $dsn = 'sqlite:memory;host=localhost';
        $this->db= new PDO($dsn);
    }


    /**
     *
     */
    public function add()
    {
        // Create table messages with different time format
        $this->db->exec("CREATE TABLE game_data (
                      id INTEGER PRIMARY KEY,
                      player TEXT,
                      message TEXT)");

        // Array with some test data to insert to database
        $messages = array('title' => 'Hello!',
                'message' => 'Just testing...'
        );

        // Prepare INSERT statement into SQLite3 memory db
        $insert = "INSERT INTO messages (id, title, message)
                VALUES (:id, :title, :message)";

        $stmt = $this->db->prepare($insert);

        $title = $messages['title'];
        $message = $messages['message'];

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':message', $message);

        $stmt->execute();

    }

    /**
     * @return array
     */
    public function get()
    {
        $query = 'SELECT * FROM messages';
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

}
