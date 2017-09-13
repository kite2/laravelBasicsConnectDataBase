<?php

use Illuminate\Database\Seeder;
use App\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->author_id = "1";
        $book->category_id = "1";
        $book->book_name = "First Win";
        $book->book_publisher = "Winner";
        $book->img = "123";
        $book->save();
    }
}
