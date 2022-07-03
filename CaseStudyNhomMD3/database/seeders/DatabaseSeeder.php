<?php

namespace Database\Seeders;

use App\Models\MovieSeat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SeatTypeSeeder::class,
            SeatSeeder::class,
            CategorySeeder::class,
            MovieSeeder::class,
            CategoryMovieSeeder::class,
            FoodSeeder::class,
            OrderSeeder::class,
            MovieSeatSeeder::class
        ]);
    }
}
