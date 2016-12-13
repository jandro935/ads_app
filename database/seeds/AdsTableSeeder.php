<?php

use App\Models\Ads;
use Illuminate\Database\Seeder;

//use Illuminate\Support\Facades\DB;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //        DB::table('ads')->truncate();

        factory(Ads::class, 50)->create();
    }
}
