<?php

namespace Codecheef\Backup\Commands;

use Illuminate\Console\Command;

class BackupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will take backup you mysql database automatically via cron job';

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
        $db_username = env('DB_USERNAME');
        $db_password = env('DB_PASSWORD');
        $db_database = env('DB_DATABASE');
        
        $name = 'export_'.time().'.sql';
        $path = public_path('database/');
        $backup_path = $path.$name;

        exec("mysqldump -u$db_username -p$db_password $db_database > $backup_path");
    }
}
