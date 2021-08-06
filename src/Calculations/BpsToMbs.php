<?php


namespace App\Calculations;


use App\Input\InputRow;

trait BpsToMbs
{
    public function convertBpsToMbs(InputRow $row) : float
    {
        $bits = $row->getMetricValue() * 8;
        return round($bits / 1000000, 2);
    }
}