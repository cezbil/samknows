<?php


namespace App\Calculations;


use App\Input\InputFileDecoded;
use App\Input\InputRow;

class Calculations extends AbstractCalculations
{

    /**
     * @inheritDoc
     */
    public function getMin(InputFileDecoded $dataSet): float
    {
        // TODO: Implement getMin() method.
    }

    /**
     * @inheritDoc
     */
    public function getMax(InputFileDecoded $dataSet): float
    {
        // TODO: Implement getMax() method.
    }

    /**
     * @inheritDoc
     */
    public function getMedian(InputFileDecoded $dataSet): float
    {
        // TODO: Implement getMedian() method.
    }

    /**
     * @inheritDoc
     */
    public function getAverage(InputFileDecoded $dataSet): float
    {
        // TODO: Implement getAverage() method.
    }

    public function getInputInMegabitsPerSecond(InputFileDecoded $dataSet
    ): InputFileDecoded {
        $rows = array_map(function(InputRow $row) {
            $mbps = $this->convertBpsToMbs($row);
            $row->setMetricValue($mbps);
            return $row;
        }, $dataSet->getRows());
        $dataSet->setRows($rows);
        return $dataSet;
    }

    public function convertBpsToMbs(InputRow $row) : float
    {
        $bits = $row->getMetricValue() * 8;
        return $bits / 1000000;
    }
}