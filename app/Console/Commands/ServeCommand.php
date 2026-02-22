<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ServeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'serve {--port=8888} {--host=localhost}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Serve the application on the PHP development server';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $host = $this->option('host');
        $port = $this->option('port');
        $publicPath = base_path('public');

        $this->info("Lumen development server started: http://{$host}:{$port}");

        passthru("php -S {$host}:{$port} -t \"{$publicPath}\"");

        return 0;
    }
}
