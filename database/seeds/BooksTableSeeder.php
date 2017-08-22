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

      Book::truncate();
      Book::create([
        'title' => 'gate',
        'volume_number' => 10,
        'related_book_id' => 1,
        'posoition_id' => 1,
        ]);

    }
}
