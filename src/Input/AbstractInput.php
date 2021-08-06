<?php


namespace App\Input;


abstract class AbstractInput implements IInput
{

    protected $pathToFile;

    /**
     * AbstractInput constructor.
     *
     * @param $pathToFile
     */
    public function __construct($pathToFile)
    {
        $this->pathToFile = $pathToFile;
    }

    abstract public function getFile(): string;
}