<?php


namespace App\Calculations;


use App\Input\InputFileDecoded;

abstract class AbstractCalculations implements ICalculations
{

    /**
     * @inheritDoc
     */
    abstract public function getMin(InputFileDecoded $dataSet): float;

    /**
     * @inheritDoc
     */
    abstract public function getMax(InputFileDecoded $dataSet): float;

    /**
     * @inheritDoc
     */
    abstract public function getMedian(InputFileDecoded $dataSet): float;

    /**
     * @inheritDoc
     */
    abstract public function getAverage(InputFileDecoded $dataSet): float;

    /**
     * @param  InputFileDecoded  $dataSet
     *
     * @return array
     */
    abstract public function getInputInMegabitsPerSecond(InputFileDecoded $dataSet): InputFileDecoded;
}