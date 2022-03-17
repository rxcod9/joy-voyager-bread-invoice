<?php

namespace Joy\VoyagerBreadInvoice\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class BreadInvoice extends Command
{
    protected $name = 'joy-bread-invoice';

    protected $description = 'Joy VoyagerBreadInvoice';

    public function handle()
    {
        $this->output->title('Starting bread-invoice');

        // Your magic here

        $this->output->success('BreadInvoice successful');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['arguement1', InputArgument::REQUIRED, 'The argument1 description'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            [
                'option1',
                'o',
                InputOption::VALUE_OPTIONAL,
                'The option1 description',
                config('joy-voyager-bread-invoice.option1')
            ],
        ];
    }
}
