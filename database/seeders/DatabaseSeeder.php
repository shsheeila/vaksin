<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // \App\Models\User::factory(10)->create();
        Schema::disableForeignKeyConstraints();
        DB:: table('news')->truncate();
        DB::table('info')->truncate();

        for ($i=1; $i <= 10; $i++) {
            DB::table('news')->insert([
                'slug' => $faker->slug,
                'title' => ucwords($faker->sentence),
                'content' => $faker->paragraph(5),
                'image' =>   $faker->imageUrl(),
                'created_at' => $faker->dateTimeThisMonth(),
                'updated_at' => $faker->dateTimeThisMonth()
            ]);
        }
}
}
