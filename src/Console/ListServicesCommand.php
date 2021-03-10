<?php

namespace Ezitis\Hook\Console;

use Illuminate\Console\Command;
use function Couchbase\defaultDecoder;

class ListServicesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hook:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all available services';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info("Here is the list of supported services");
        $this->newLine();
        $this->table(['Key', 'Name'], $this->getServices());
    }

    /**
     * @return array
     */
    private function getServices(): array
    {
        return [
            [
                'php73',
                'PHP 7.3'
            ],
            [
                'php74',
                'PHP 7.4'
            ],
            [
                'node10',
                'Node v10'
            ],
        ];
    }
}