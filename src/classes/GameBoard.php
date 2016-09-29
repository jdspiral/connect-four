<?php

class GameBoard {

    /**
     * @var int
     */
    protected $rows;

    /**
     * @var int
     */
    protected $columns;

    /**
     * @var array
     */
    protected $board_dimensions = array();

    /**
     * @param int $rows
     * @param int $columns
     */
    function __construct($rows = 6, $columns = 7)
    {
        $this->rows = $rows;
        $this->columns = $columns;

        //$this->buildGameBoard();

    }

    public function buildGameBoard()
    {
        //resets the board array
        $board_dimensions = array();

        for($i = 0; $i < $this->getRows() ; $i ++ ){

            $board_dimensions = array();

            for($j = 0; $j < $this->getColumns() ; $j ++ ){

                //-1 means this slot is unoccupied.
                $board_dimensions[$i][$j] = -1;

            }

        }

        echo '<table>';

        $board_dimensions = $this->getCurrentBoard();

        for($i = 0; $i < $this->getRows() ; $i ++ ){

            echo '<tr>';

            for($j = 0; $j < $this->getColumns() ; $j ++ ){

                echo '<td>' . $board_dimensions[$i][$j] . '</td>';

            }

            echo '</tr>';

        }

        echo '</table>';


    }


    /**
     * Print out each step (board and details)
     */
    public function printBoard(){

        print '<table>';

        $board_dimensions = $this->getCurrentBoard();

        for($i = 0; $i < $this->getRows() ; $i ++ ){

            print '<tr>';

            for($j = 0; $j < $this->getColumns() ; $j ++ ){

                print '<td>' . $board_dimensions[$i][$j] . '</td>';

            }

            print '</tr>';

        }

        print '</table>';
    }

    /**
     * Set the number of rows for the board
     *
     * @param int $rows
     */
    public function setRows($rows = 6){

        $this->rows = $rows;

    }

    /**
     * Get the number of rows for the board
     *
     * @return int
     */
    public function getRows(){

        return $this->rows;

    }

    /**
     * Set the number of columns for the board
     *
     * @param int $col
     */
    public function setColumns($columns = 7){

        $this->columns = $columns;

    }

    /**
     * Get the number of columns for the board
     *
     * @return int
     */
    public function getColumns(){

        return $this->columns;

    }

}