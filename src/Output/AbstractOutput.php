<?php


namespace App\Output;


/**
 * Class AbstractOutput
 *
 * @package App\Output
 */
abstract class AbstractOutput implements IOutput
{
    /**
     * @return string
     */
    abstract public function printToFile(): void;

    abstract public function printToConsole();
}