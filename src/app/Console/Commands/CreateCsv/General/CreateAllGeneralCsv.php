<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Console\Command;

class CreateAllGeneralCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-all-general-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '武将に関連するCSVをすべて作成するコマンド';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $this->call('app:create-character-voices-csv');
            $this->call('app:create-general-get-methods-csv');
            $this->call('app:create-general-provided-ends-csv');
            $this->call('app:create-general-provided-starts-csv');
            $this->call('app:create-generals-csv');
            $this->call('app:create-general-special-skills-csv');
            $this->call('app:create-general-strategy-categories-csv');
            $this->call('app:create-illustrations-csv');
            $this->call('app:create-strategy-name-furiganas-csv');
            $this->call('app:create-strategy-names-csv');
            $this->call('app:create-strategy-overviews-csv');

            return 0;
        } catch (\Exception $e) {
            $this->error('エラーが発生しました: '.$e->getMessage());

            return 1;
        }
    }
}
