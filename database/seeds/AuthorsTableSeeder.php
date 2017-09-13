<?php

use Illuminate\Database\Seeder;
use App\Author;
class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new Author();
        $author->name = "Winner";
        $author->save();
    }
}
