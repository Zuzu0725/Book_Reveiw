<?php

namespace Database\Seeders;

use App\Models\BookReview;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BookReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('book_reviews')->insert([
                'book_name' => '書籍名' . $i,
                'author' => '著者名' . $i,
                'summary' => '感想' . $i,
            ]);
        }
    }
}
