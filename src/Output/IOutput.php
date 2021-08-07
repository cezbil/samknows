<?php


namespace App\Output;


/**
 * Interface IOutput
 *
 * @package App\Output
 */
interface IOutput
{
    /**
     * @return string
     */
    public function printToFile() : string;

    /**
     * @return string
     */
    public function printToConsole();
}