<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temp = new Discount();
        $temp->name = "Merdeka Discount";
        $temp->code = "a";
        $temp->amount = "5";
        $temp->min_tier_points = "21";
        $temp->duration_start = "2022-08-18 10:12:37";
        $temp->duration_end = "2022-09-18 10:12:37";
        $temp->type_id = "3";
        $temp->discount_applicable_id = "1";
        $temp->save();

        $temp = new Discount();
        $temp->name = "Free Shipping Discount";
        $temp->code = "b";
        $temp->amount = "10";
        $temp->min_tier_points = "121";
        $temp->duration_start = "2022-08-15 10:12:37";
        $temp->duration_end = "2022-09-15 10:12:37";
        $temp->type_id = "1";
        $temp->save();
    }
}
