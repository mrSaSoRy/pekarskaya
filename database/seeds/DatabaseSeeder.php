<?php

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
//         $this->call(UsersTableSeeder::class);
        factory(App\Models\Category::class, rand(3,7))->create()->each(function($categories) {
            $categories->page()->saveMany(factory(App\Models\Page::class, rand(2,8))->make());
        });
    }
}
