<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 10)
            ->create()
            ->each(function ($u) {
                $u->comments()->save(factory(App\Comment::class)->make(['text' => 'User comments']));
            });
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
