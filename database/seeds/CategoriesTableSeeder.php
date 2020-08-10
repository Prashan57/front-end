<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->truncate();

        DB::table("categories")->insert([
            [
                "title"=>"App Developer",
                "body"=>"App Developer"
            ],
            [
                "title"=>"Front End Developer",
                "body"=>"Front End Developer",
            ],
            [
                "title"=>"Back End Developer",
                "body"=>"Back End Developer"
            ],
            [
                "title"=>"Full Web Developer",
                "body"=>"Full Web Developer"
            ]
        ]);

        //update the posts data
        for ($blogs_id=1; $blogs_id <= 10; $blogs_id++){
            $category_id = rand(1,5);

            DB::table("blogs")
                ->where("id",$blogs_id)
                ->update(["category_id"=> $category_id ]);
        }
    }
}
