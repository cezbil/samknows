<?php


namespace App\Input;


/**
 * Class AbstractInput
 *
 * @package App\Input
 */
abstract class AbstractInput implements IInput
{

    /**
     * @return string
     */
    abstract public function getFile(): string;
}