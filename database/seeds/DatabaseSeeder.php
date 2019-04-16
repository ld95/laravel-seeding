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
        factory(App\User::class, 500)->create()->each(function ($user) {
            $user->posts()->save(factory(App\Post::class)->make());
        });
    }
}
