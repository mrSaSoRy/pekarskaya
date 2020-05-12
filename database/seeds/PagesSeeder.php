<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Category::class, rand(3,7))->create()->each(function($categories) {
            $categories->page()->saveMany(factory(App\Models\Page::class, rand(2,8))->make());
        });
    }



}