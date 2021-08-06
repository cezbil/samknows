<?php


namespace App\Calculations;


use App\Input\InputFileDecoded;

/**
 * Interface ICalculations
 *
 * @package App\Calculations
 */
interface ICalculations
{
    /**
     * @param  InputFileDecoded  $dataSet
     *
     * @return float
     */
    public function getMin(InputFileDecoded $dataSet) : float;

    /**
     * @param  InputFileDecoded  $dataSet
     *
     * @return float
     */
    public function getMax(InputFileDecoded $dataSet) : float;

    /**
     * @param  InputFileDecoded  $dataSet
     *
     * @return float
     */
    public function getMedian(InputFileDecoded $dataSet) : float;

    /**
     * @param  InputFileDecoded  $dataSet
     *
     * @return float
     */
    public function getAverage(InputFileDecoded $dataSet) : float;

    /**
     * @param  InputFileDecoded  $dataSet
     *
     * @return array
     */
    public function getInputInMegabitsPerSecond(InputFileDecoded $dataSet) : InputFileDecoded;

}