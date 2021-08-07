<?php


namespace App\Calculations;

/**
 * Interface ICalculations
 *
 * @package App\Calculations
 */
interface ICalculations
{
    /**
     * @return float
     */
    public function getMin() : float;

    /**
     * @return float
     */
    public function getMax() : float;

    /**
     * @return float
     */
    public function getMedian() : float;

    /**
     * @return float
     */
    public function getAverage() : float;
    /**
     * @return array
     */
    public function getUnderPerforming() : array;

}