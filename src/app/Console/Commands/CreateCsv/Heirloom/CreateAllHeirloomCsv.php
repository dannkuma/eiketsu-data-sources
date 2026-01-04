<?php

namespace App\Console\Commands\CreateCsv\Heirloom;

use Illuminate\Console\Command;

class CreateAllHeirloomCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-all-heirloom-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '戦器に関連するCSVをすべて作成するコマンド';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        try {
            $this->call('app:create-heirlooms-csv');
            $this->call('app:create-heirloom-effect-descriptions-csv');
            $this->call('app:create-heirloom-effect-summaries-csv');
            $this->call('app:create-heirloom-values-csv');
            $this->call('app:create-heirloom-effects-csv');

            return 0;
        } catch (\Exception $e) {
            $this->error('エラーが発生しました: '.$e->getMessage());

            return 1;
        }
    }
}
