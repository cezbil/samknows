<?php


namespace App\Calculations;


use App\Input\InputFileDecoded;

abstract class AbstractCalculations implements ICalculations
{
    /**
     * @inheritDoc
     */
    abstract public function getMin(): float;

    /**
     * @inheritDoc
     */
    abstract public function getMax(): float;

    /**
     * @inheritDoc
     */
    abstract public function getMedian(): float;

    /**
     * @inheritDoc
     */
    abstract public function getAverage(): float;

    /**
     * @inheritDoc
     */
    abstract public function getUnderPerforming(): array;
}