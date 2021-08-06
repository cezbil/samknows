<?php


namespace App\Input;


/**
 * Interface IInput
 *
 * @package App\Input
 */
interface IInput
{
    /**
     * @return string
     */
    public function getFile() : string;
}