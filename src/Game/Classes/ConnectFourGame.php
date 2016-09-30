<?php namespace Game\Classes;

class ConnectFourGame {

    protected $gameBoard;

    function __construct()
    {

    }

    /**
     * Starts the game
     */
    public function start()
    {
        $this->setup();
    }

    /**
     * @return GameBoard
     */
    public function setup()
    {
        $gameBoard = new GameBoard();

        return $gameBoard;
    }

}