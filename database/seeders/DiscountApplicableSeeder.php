<?php

namespace Database\Seeders;

use App\Models\DiscountApplicable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountApplicableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temp = new DiscountApplicable();
        $temp->name = "Coba";
        $temp->save();
    }
}
