<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->prepareData();
        DB::table('books')->insert($data);
    }

    private function prepareData()
    {
        $insertData = [];
        foreach (range(1, 50) as $i) {
            $insertData[] = [
                'name' => 'Name ' . $i . ' Book',
                'author' => 'Author ' . $i . ' Book',
                'description'=> 'Description '.$i,
            ];
        };
        return $insertData;
    }
}