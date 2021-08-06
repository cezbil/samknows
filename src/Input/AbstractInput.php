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
     * @var string
     */
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

    /**
     * @return string
     */
    abstract public function getFile(): string;
}