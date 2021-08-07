<?php


namespace App\Calculations;


use App\Input\InputFileDecoded;
use App\Input\InputRow;

class Calculations extends AbstractCalculations
{
    use BpsToMbs;
    /**
     * @var  InputFileDecoded  $dataSet
     */
    private $dataSet;

    /**
     * AbstractCalculations constructor.
     *
     * @param  InputFileDecoded  $dataSet
     */
    public function __construct(InputFileDecoded $dataSet)
    {
        $this->dataSet = $dataSet;
    }
    /**
     * @inheritDoc
     */
    public function getMin(): float
    {
        return min($this->dataSet->getMetricValueRows());
    }

    /**
     * @inheritDoc
     */
    public function getMax(): float
    {
        return max($this->dataSet->getMetricValueRows());
    }

    /**
     * @inheritDoc
     */
    public function getMedian(): float
    {
        $rows = $this->dataSet->getMetricValueRows();
        $count = count($rows);
        sort($rows);
        $middle = floor(($count-1)/2);

        return round(($rows) ? ($rows[$middle] + $rows[$middle + 1 - $count % 2 ]) / 2 : 0, 2);
    }

    /**
     * @inheritDoc
     */
    public function getAverage(): float
    {
        return round(array_sum($this->dataSet->getMetricValueRows()) / count($this->dataSet->getMetricValueRows()), 2);
    }
}