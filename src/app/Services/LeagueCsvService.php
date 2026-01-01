<?php

namespace App\Services;

use League\Csv\Reader;
use League\Csv\Writer;

class LeagueCsvService
{
    public function createCsvWriter(string $path): Writer
    {
        return Writer::from($path, 'w+');
    }

    public function insertHeader(Writer $writer, array $header): void
    {
        $writer->insertOne($header);
    }

    public function insertAll(Writer $writer, array $records): void
    {
        $writer->insertAll($records);
    }

    public function readCsvToArray(string $path): array
    {
        $reader = Reader::from($path, 'r');
        $reader->setHeaderOffset(0);

        return iterator_to_array($reader->getRecords());
    }
}
