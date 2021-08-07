<?php


namespace App\Output;


use App\Calculations\Calculations;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Output
 *
 * @package App\Output
 */
class Output extends AbstractOutput
{
    const OUTPUT_PATH = __DIR__ . '/../../Resources/Fixtures/outputs/';
    /**
     * @var float
     */
    private $average;
    /**
     * @var float
     */
    private $median;
    /**
     * @var float
     */
    private $min;
    /**
     * @var float
     */
    private $max;

    /**
     * @var array
     */
    private $underPerforming = [];

    /**
     * @var
     */
    private $calculations;

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @var array
     */
    private $periodChecked;

    /**
     * Output constructor.
     *
     * @param  Calculations  $calculations
     * @param  OutputInterface  $output
     */
    public function __construct(Calculations $calculations, OutputInterface $output)
    {
        $this->calculations = $calculations;
        $this->output = $output;
        $this->average = $calculations->getAverage();
        $this->min = $calculations->getMin();
        $this->max = $calculations->getMax();
        $this->median = $calculations->getMedian();
        $this->underPerforming = $calculations->getUnderPerformingChecked();
        $this->periodChecked = $calculations->getPeriodChecked();
    }

    /**
     * @return float
     */
    public function getAverage(): float
    {
        return $this->average;
    }

    /**
     * @param  float  $average
     */
    public function setAverage(float $average): void
    {
        $this->average = $average;
    }

    /**
     * @return float
     */
    public function getMedian(): float
    {
        return $this->median;
    }

    /**
     * @param  float  $median
     */
    public function setMedian(float $median): void
    {
        $this->median = $median;
    }

    /**
     * @return float
     */
    public function getMin(): float
    {
        return $this->min;
    }

    /**
     * @param  float  $min
     */
    public function setMin(float $min): void
    {
        $this->min = $min;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return $this->max;
    }

    /**
     * @param  float  $max
     */
    public function setMax(float $max): void
    {
        $this->max = $max;
    }

    /**
     * @return array
     */
    public function getUnderPerforming(): array
    {
        return $this->underPerforming;
    }

    /**
     * @param  array  $underPerforming
     */
    public function setUnderPerforming(array $underPerforming): void
    {
        $this->underPerforming = $underPerforming;
    }

    /**
     * @return mixed
     */
    public function getCalculations()
    {
        return $this->calculations;
    }

    /**
     * @param  mixed  $calculations
     */
    public function setCalculations($calculations): void
    {
        $this->calculations = $calculations;
    }

    /**
     * @return OutputInterface
     */
    public function getOutput(): OutputInterface
    {
        return $this->output;
    }

    /**
     * @param  OutputInterface  $output
     */
    public function setOutput(OutputInterface $output): void
    {
        $this->output = $output;
    }

    /**
     * @return array
     */
    public function getPeriodChecked(): array
    {
        return $this->periodChecked;
    }

    /**
     * @param  array  $periodChecked
     */
    public function setPeriodChecked(array $periodChecked): void
    {
        $this->periodChecked = $periodChecked;
    }

    public function printToConsole()
    {
        $outputStyle = new OutputFormatterStyle('red', '#ff0', ['bold', 'blink']);
        $this->output->getFormatter()->setStyle('fire', $outputStyle);
        $this->output->writeln('<info>Period checked::</info>');
        $this->output->writeln('<info>From: ' . $this->getPeriodChecked()['first']);
        $this->output->writeln('<info>To: ' . $this->getPeriodChecked()['last']);
        $this->output->writeln('<info>Statistics:</info>');
        $this->output->writeln('<info>Unit: Megabits per second</info>');
        $this->output->writeln('<comment>Average: '.$this->getAverage() . '</comment>');
        $this->output->writeln('<comment>Min: '.$this->getMin() . '</comment>');
        $this->output->writeln('<comment>Max: '.$this->getMax() . '</comment>');
        $this->output->writeln('<comment>Median: '.$this->getMedian() . '</comment>');
        $this->output->writeln('<info>Under-performing periods:</info>');
        $this->output->writeln('<fire>* The period between ' . $this->getUnderPerforming()['first'] . ' and '. $this->getUnderPerforming()['last'] . ' was under-performing.</fire>');

    }
    /**
     * @inheritDoc
     */
    public function printToFile(): void
    {
        $outputToPrint = 'SamKnows Metric Analyser v1.0.0' . PHP_EOL;
        $outputToPrint .= '===============================' . PHP_EOL;
        $outputToPrint .= PHP_EOL;
        $outputToPrint .= 'Period checked:' . PHP_EOL;
        $outputToPrint .= PHP_EOL;
        $outputToPrint .= '    From: ' . $this->getPeriodChecked()['first'] . PHP_EOL;
        $outputToPrint .= '    To:   ' . $this->getPeriodChecked()['last'] . PHP_EOL;
        $outputToPrint .= PHP_EOL;
        $outputToPrint .= 'Statistics:' . PHP_EOL;
        $outputToPrint .= PHP_EOL;
        $outputToPrint .= '    Unit: Megabits per second' . PHP_EOL;
        $outputToPrint .= PHP_EOL;
        $outputToPrint .= '    Average: ' . $this->getAverage() . PHP_EOL;
        $outputToPrint .= '    Min: ' . $this->getMin() . PHP_EOL;
        $outputToPrint .= '    Max: ' . $this->getMax() . PHP_EOL;
        $outputToPrint .= '    Median: ' . $this->getMedian() . PHP_EOL;
        $outputToPrint .= PHP_EOL;
        $outputToPrint .= 'Under-performing periods:' . PHP_EOL;
        $outputToPrint .= PHP_EOL;
        $outputToPrint .= '    * The period between ' . $this->getUnderPerforming()['first'] . ' and '. $this->getUnderPerforming()['last'] . PHP_EOL;
        $outputToPrint .= '      was under-performing.' . PHP_EOL;


        if (realpath(self::OUTPUT_PATH)){
            file_put_contents(self::OUTPUT_PATH . rand(1, 99999) . '.output',$outputToPrint);
        }
        // TODO: Implement printToFile() method.
    }

}