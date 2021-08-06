<?php


namespace App\Command;


use App\Calculations\Calculations;
use App\Input\InputFromArgs;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AppAnalyseMetricsCommand
 *
 * @package App\Command
 */
class AppAnalyseMetricsCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'app:analyse-metrics';

    /**
     * Configure the command.
     */
    protected function configure(): void
    {
        $this->setDescription('Analyses the metrics to generate a report.');
        $this->addOption('input', null, InputOption::VALUE_REQUIRED, 'The location of the test input');
    }

    /**
     * Detect slow-downs in the data and output them to stdout.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $pathToFile = $input->getOption('input');
        $inputFromArgs = new InputFromArgs($pathToFile);
        $contents = $inputFromArgs->getRows();
        $calc = new Calculations();
        $bits = $calc->getInputInMegabitsPerSecond($contents);
        return Command::SUCCESS;
    }
}