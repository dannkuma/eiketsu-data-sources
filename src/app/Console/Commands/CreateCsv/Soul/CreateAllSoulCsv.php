<?php

namespace App\Console\Commands\CreateCsv\Soul;

use Illuminate\Console\Command;

class CreateAllSoulCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-all-soul-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '英魂に関連するCSVをすべて作成するコマンド';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        try {
            $this->call('app:create-souls-csv');
            $this->call('app:create-soul-initial-effects-csv');
            $this->call('app:create-soul-effects-csv');

            return 0;
        } catch (\Exception $e) {
            $this->error('エラーが発生しました: '.$e->getMessage());

            return 1;
        }
    }
}
