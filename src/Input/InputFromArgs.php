<?php


namespace App\Input;


/**
 * Class InputFromArgs
 *
 * @package App\Input
 */
class InputFromArgs extends AbstractInput
{
    /**
     * @var string
     */
    protected $pathTofile;

    /**
     * InputFromArgs constructor.
     *
     * @param $pathTofile
     */
    public function __construct($pathTofile)
    {
        $this->pathTofile = $pathTofile;
    }


    /**
     * @return string
     */
    public function getFile(): string
    {
        if ($this->pathTofile) {
            $contents = file_get_contents($this->pathTofile);
        } else {
            throw new \RuntimeException("Please provide a filename (path).");
        }
        return $contents;
    }

    /**
     * @return InputFileDecoded
     */
    public function getRows(): InputFileDecoded
    {
        $input = json_decode($this->getFile());
        $rows = [];
        foreach ($input as $row) {
            array_push($rows, new InputRow($row->metricValue, $row->dtime));
        }
        return new InputFileDecoded($rows);
    }
}