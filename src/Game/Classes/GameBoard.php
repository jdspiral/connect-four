<?php namespace Game\Classes;

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

        $this->buildGameBoard();
        $this->displayBoard();

    }

    /**
     * Build out game board
     */
    public function buildGameBoard()
    {
        //resets the board array
        $board_dimensions = array();

        for($i = 0; $i < $this->getRows() ; $i ++ ){

            $board_dimensions[$i] = array();

            for($j = 0; $j < $this->getColumns() ; $j ++ ){

                //-1 means this slot is unoccupied.
                $board_dimensions[$i][$j] = -1;

            }

        }

        $this->setBoard($board_dimensions);

    }


    /**
     * Display the board
     */
    public function displayBoard()
    {

        print '<table>';

       $board_dimensions = $this->getBoard();

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
     * Get the board dimensions
     *
     * @return array
     */
    protected function getBoard()
    {

        return $this->board_dimensions;

    }

    /**
     * Set the board dimensions
     */
    protected function setBoard( $board_dimensions )
    {

        $this->board_dimensions = $board_dimensions;

    }

    /**
     * Set the number of rows for the board
     *
     * @param int $rows
     */
    public function setRows($rows = 6)
    {

        $this->rows = $rows;

    }

    /**
     * Get the number of rows for the board
     *
     * @return int
     */
    public function getRows()
    {

        return $this->rows;

    }

    /**
     * Set the number of columns for the board
     *
     * @param int $columns
     */
    public function setColumns($columns = 7)
    {

        $this->columns = $columns;

    }

    /**
     * Get the number of columns for the board
     *
     * @return int
     */
    public function getColumns()
    {

        return $this->columns;

    }

}