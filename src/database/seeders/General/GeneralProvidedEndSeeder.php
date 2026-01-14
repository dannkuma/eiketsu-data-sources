<?php

namespace Database\Seeders\General;

use App\Models\General\GeneralProvidedEnd;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class GeneralProvidedEndSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generalProvidedEnds = [
            '22/04/26',
            '22/05/10',
            '22/06/07',
            '22/07/05',
            '22/07/26',
            '22/08/08',
            '22/10/11',
            '22/11/01',
            '22/11/15',
            '22/12/06',
            '22/12/20',
            '23/01/17',
            '23/02/07',
            '23/02/21',
            '23/03/28',
            '23/04/11',
            '23/04/25',
            '23/05/23',
            '23/06/06',
            '23/06/20',
            '23/07/11',
            '23/07/25',
            '23/08/29',
            '23/09/12',
            '23/09/26',
            '23/10/31',
            '23/11/21',
            '23/12/05',
            '23/12/26',
            '24/01/09',
            '24/01/30',
            '24/02/13',
            '24/02/27',
            '24/03/12',
            '24/04/02',
            '24/04/16',
            '24/04/30',
            '24/05/14',
            '24/05/28',
            '24/06/11',
            '24/07/02',
            '24/07/16',
            '24/08/13',
            '24/09/03',
            '24/09/17',
            '24/10/01',
            '24/10/15',
            '24/10/29',
            '24/11/12',
            '24/12/03',
            '24/12/17',
            '24/12/31',
            '25/01/14',
            '25/02/04',
            '25/02/18',
            '25/03/04',
            '25/03/18',
            '25/04/01',
            '25/04/15',
            '25/05/06',
            '25/05/20',
            '25/06/03',
            '25/06/17',
            '25/07/22',
            '25/08/05',
            '25/08/19',
            '25/09/02',
            '25/09/16',
            '25/10/07',
            '25/10/21',
            '25/11/18',
            '25/12/02',
            '25/12/15',
            '25/12/16',
            '25/12/30',
        ];

        $data = array_map(fn ($providedEnd) => [
            'general_provided_end' => Carbon::createFromFormat('y/m/d', $providedEnd)->format('Y-m-d'),
        ], $generalProvidedEnds);

        GeneralProvidedEnd::upsert(
            $data,
            ['general_provided_end'],
            ['general_provided_end']
        );
    }
}
