<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DownloadGeneralThumbnailImages extends Command
{
    private const BASE_URL = 'https://image.eiketsu-taisen.net/general/avatar/';

    private const FILE_EXTENSION = 'png';

    private const CSV_PATH = 'csv/generals/thumnbnail-base.csv';

    private const OUTPUT_DIRECTORY = 'images/generals/thumbnails';

    private const REQUEST_TIMEOUT_SECONDS = 10;

    private const RETRY_TIMES = 2;

    private const RETRY_SLEEP_MILLISECONDS = 500;

    private const CHUNK_SIZE = 25;

    private const REQUEST_SLEEP_MIN_MICROSECONDS = 300000;

    private const REQUEST_SLEEP_MAX_MICROSECONDS = 800000;

    private const CHUNK_SLEEP_MIN_SECONDS = 3;

    private const CHUNK_SLEEP_MAX_SECONDS = 5;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:download-general-thumbnail-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '武将サムネイル画像をハッシュ一覧から取得して保存するコマンド';

    public function handle(): int
    {
        $thumbnailBases = $this->readThumbnailBases();

        foreach (array_chunk($thumbnailBases, self::CHUNK_SIZE) as $chunkIndex => $chunk) {
            $this->info(($chunkIndex + 1).'番目のチャンクを処理中');

            foreach ($chunk as $thumbnailBase) {
                $outputPath = $this->buildOutputPath($thumbnailBase['id']);

                if (Storage::disk('public')->exists($outputPath)) {
                    $this->line('保存済みのためスキップしました: '.$outputPath);

                    continue;
                }

                $imageUrl = $this->buildImageUrl($thumbnailBase['hash']);

                $response = Http::accept('image/png')
                    ->timeout(self::REQUEST_TIMEOUT_SECONDS)
                    ->retry(self::RETRY_TIMES, self::RETRY_SLEEP_MILLISECONDS, throw: false)
                    ->get($imageUrl);

                if (! $response->successful()) {
                    $message = "画像の取得に失敗したため保存をスキップしました ({$response->status()}): {$imageUrl}";
                    $this->warn($message);
                    Log::warning($message);
                    $this->sleepBetweenRequests();

                    continue;
                }

                if (! Storage::disk('public')->put($outputPath, $response->body())) {
                    $message = '画像の保存に失敗しました: '.$outputPath;
                    $this->error($message);
                    Log::error($message);

                    return self::FAILURE;
                }

                $this->info('画像を保存しました: '.$outputPath);

                $this->sleepBetweenRequests();
            }

            $this->sleepBetweenChunks();
        }

        return self::SUCCESS;
    }

    private function readThumbnailBases(): array
    {
        $csvPath = Storage::disk('local')->path(self::CSV_PATH);

        return array_values(array_filter(array_map(
            static function (string $line): ?array {
                $columns = str_getcsv(trim($line));

                if (count($columns) < 2) {
                    return null;
                }

                return [
                    'id' => trim($columns[0]),
                    'hash' => trim($columns[1]),
                ];
            },
            file($csvPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: []
        )));
    }

    private function buildImageUrl(string $hash): string
    {
        return self::BASE_URL.$hash.'.'.self::FILE_EXTENSION;
    }

    private function buildOutputPath(string $id): string
    {
        return self::OUTPUT_DIRECTORY.'/'.$id.'_thumbnail.'.self::FILE_EXTENSION;
    }

    private function sleepBetweenRequests(): void
    {
        usleep(random_int(self::REQUEST_SLEEP_MIN_MICROSECONDS, self::REQUEST_SLEEP_MAX_MICROSECONDS));
    }

    private function sleepBetweenChunks(): void
    {
        sleep(random_int(self::CHUNK_SLEEP_MIN_SECONDS, self::CHUNK_SLEEP_MAX_SECONDS));
    }
}
