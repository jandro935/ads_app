<?php

use App\Models\AdsStars;
use Illuminate\Database\Seeder;

class AdsStarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AdsStars::class, 25)->create();
    }
}
