<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dept;

class CreateDeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Dept::create(['name'=>'Adminstration']);
        Dept::create(['name'=>'IT Software']);

    }
}
