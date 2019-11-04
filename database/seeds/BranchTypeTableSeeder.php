<?php

use App\BranchType;
use Illuminate\Database\Seeder;

class BranchTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BranchType::create([
            'name'=> 'Retail'
        ]);

        BranchType::create([
            'name'=> 'Wholesale'
        ]);

        BranchType::create([
            'name'=> 'Garments'
        ]);
    }
}
