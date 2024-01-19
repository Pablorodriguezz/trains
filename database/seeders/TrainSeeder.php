<?php




namespace Database\Seeders;




use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;




class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'Morcilleta',
                'passengers' => 200,
                'year' => 2015,
                'train_type_id' => 1
            ],
            [
                'name' => 'Velocidad',
                'passengers' => 100,
                'year' => 2022,
                'train_type_id' => 2
            ],
            [
                'name' => 'Coconut',
                'passengers' => 250,
                'year' => 2020,
                'train_type_id' => 3
            ]
        ]);
    }
}
