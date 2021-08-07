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
    public function printToFile() : void;

    /**
     * @return string
     */
    public function printToConsole();
}