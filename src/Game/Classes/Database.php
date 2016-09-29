<?php namespace Game\Classes;

class Database {

    protected $db;

    function __construct()
    {
        $this->db = new SQLite3(__DIR__."database/db.sqlite");
    }

}