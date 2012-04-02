<?php

/**
 * Interface that represents a square in a Sudoku grid.
 * 
 * @author pjot 
 */
interface SudokuNumber
{
    /**
     * Get the row of the number
     * 
     * @return int Row 
     */
    public function getRow();
    /**
     * Get the column of the number
     * 
     * @return int Column 
     */
    public function getColumn();
    /**
     * Get the value of the number
     * 
     * @return int Value, where 0 means empty 
     */
    public function getValue();
}