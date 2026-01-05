<?php

namespace App\Infrastructure\Csv;

use Illuminate\Support\Facades\File;
use League\Csv\Reader;
use League\Csv\Writer;

class CsvManager
{
    /**
     * 指定されたパスでCSV Writerインスタンスを作成する
     * ディレクトリが存在しない場合は自動的に作成する
     */
    public function createCsvWriter(string $path): Writer
    {
        $directory = dirname($path);
        File::ensureDirectoryExists($directory);

        return Writer::from($path, 'w+');
    }

    /**
     * CSVにヘッダー行を挿入する
     */
    public function insertHeader(Writer $writer, array $header): void
    {
        $writer->insertOne($header);
    }

    /**
     * CSVに複数行のデータを一括挿入する
     */
    public function insertAll(Writer $writer, array $records): void
    {
        $writer->insertAll($records);
    }

    /**
     * CSVファイルを読み込み、連想配列のリストとして返す
     */
    public function readCsvToArray(string $path): array
    {
        $reader = Reader::from($path, 'r');
        $reader->setHeaderOffset(0);

        return iterator_to_array($reader->getRecords());
    }

    /**
     * 指定したカラム（単一または複数）の値をキーとして重複を排除する
     * （重複した場合は後勝ち）
     *
     * @param  int|array  $columnIndices  カラムのインデックス（単一のint、またはintの配列）
     */
    public function uniqueByColumn(array $records, int|array $columnIndices): array
    {
        $indices = (array) $columnIndices;
        $unique = [];

        foreach ($records as $row) {
            $keyParts = [];
            foreach ($indices as $index) {
                $keyParts[] = $row[$index] ?? '';
            }
            // 配列をJSON化してユニークキーとする（区切り文字問題の回避）
            $key = json_encode($keyParts);
            $unique[$key] = $row;
        }

        return array_values($unique);
    }
}
