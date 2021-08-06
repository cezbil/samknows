<?php


namespace App\Input;


use App\Calculations\BpsToMbs;

/**
 * Class InputRow
 *
 * @package App\Input
 */
class InputFileDecoded
{
    use BpsToMbs;
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
     * @return array
     */
    public function getMetricValueRows(): array
    {
        $rows = array_map(function(InputRow $row) {
            return $this->convertBpsToMbs($row);
        }, $this->rows);
        return $rows;
    }
    /**
     * @return array
     */
    public function getDTimeRows(): array
    {
        $rows = array_map(function(InputRow $row) {
            return $row->getDtime();
        }, $this->rows);
        return $rows;
    }

    /**
     * @param  InputRow[]  $rows
     */
    public function setRows(array $rows): void
    {
        $this->rows = $rows;
    }
}