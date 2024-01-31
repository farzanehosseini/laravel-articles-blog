<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticlesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        //
        // foreach(range(1,10) as $item)
        // {
        //     DB::table('articles')->insert(
        //         [
        //             'id'=>"$item",
        //             'title'=>"article $item",
        //             'slug'=>"article-$item",
        //             'body'=>"this is article $item",
        //             'created_at'=>now(),
        //             'updated_at'=>now()
        //         ]  );
        // }
        // $faker=\Faker\Factory::create();
        // foreach(range(1,10) as $item)
        // {
        //     DB::table('articles')->insert(
        //         [
        //             'title'=>$faker->text(50),
        //             'slug'=>$faker->slug(),
        //             'body'=>$faker->paragraph(round(5,20)),
        //             'created_at'=>now(),
        //             'updated_at'=>now()
        //         ]  );
        // }

        for($i=1;$i<10;$i++)
    $article = Article::factory()->create();

    }
}
