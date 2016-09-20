<?php

namespace Fakhrulrazi\Clean\Console\Commands;

use Illuminate\Console\Command;

class cleanup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cleanup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'it just a game';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('route:clear');
        $this->call('cache:clear');
        $this->call('config:cache');
        $this->call('view:clear');
        $this->call('optimize');
    }
}
