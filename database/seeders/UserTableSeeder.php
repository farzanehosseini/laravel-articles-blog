<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Article;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // for($i=1;$i<10;$i++)
        // $article = User::factory()->create();
        user::factory(10)->create()->each(function($user){
            $user->articles()->saveMany(Article::factory(rand(1,6))->make());
        });
    }
}
