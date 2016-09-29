<?php namespace Game\Classes;

class ConnectFourGame {

    protected $gameBoard;

    function __construct()
    {

    }

    /**
    * @param GameBoard $gameBoard
    */
    public function start()
    {
        $this->setup();
    }

    public function setup()
    {
        $gameBoard = new GameBoard();

        return $gameBoard;
    }

}