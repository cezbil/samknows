<?php


namespace App\Input;


/**
 * Class InputRow
 *
 * @package App\Input
 */
class InputRow
{
    /**
     * @var float
     */
    private $metricValue;
    /**
     * @var string
     */
    private $dtime;

    /**
     * InputFileDecoded constructor.
     *
     * @param $metricValue
     * @param $dtime
     */
    public function __construct($metricValue, $dtime)
    {
        $this->metricValue = $metricValue;
        $this->dtime = $dtime;
    }

    /**
     * @return mixed
     */
    public function getMetricValue()
    {
        return $this->metricValue;
    }

    /**
     * @param  mixed  $metricValue
     */
    public function setMetricValue($metricValue): void
    {
        $this->metricValue = $metricValue;
    }

    /**
     * @return mixed
     */
    public function getDtime()
    {
        return $this->dtime;
    }

    /**
     * @param  mixed  $dtime
     */
    public function setDtime($dtime): void
    {
        $this->dtime = $dtime;
    }

}