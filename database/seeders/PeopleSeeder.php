<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->prepareData();
        DB::table('people')->insert($data);
    }

    private function prepareData()
    {
        $insertData = [];
        foreach (range(1, 50) as $i) {
            $insertData[] = [
                'name' => 'Name ' . $i,
                'age' => $i,
            ];
        };
        return $insertData;
    }
}