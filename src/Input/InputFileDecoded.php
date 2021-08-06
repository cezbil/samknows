<?php


namespace App\Input;


/**
 * Class InputRow
 *
 * @package App\Input
 */
class InputFileDecoded
{
    /**
     * @var InputRow[]
     */
    private $rows;

    /**
     * InputFileDecoded constructor.
     *
     * @param  InputRow[]  $rows
     */
    public function __construct(array $rows)
    {
        $this->rows = $rows;
    }

    /**
     * @return InputRow[]
     */
    public function getRows(): array
    {
        return $this->rows;
    }

    /**
     * @param  InputRow[]  $rows
     */
    public function setRows(array $rows): void
    {
        $this->rows = $rows;
    }
}