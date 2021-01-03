<?php

use Illuminate\Database\Seeder;
use App\BookCategory;
use Carbon\Carbon;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::insert([
            [
                'category_name' => 'Biography',
                'category_img' => 'assets/categories/biography.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Dictionary',
                'category_img' => 'assets/categories/dictionary.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Ensiklopedi',
                'category_img' => 'assets/categories/ensiklopedi.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_name' => 'Novel',
                'category_img' => 'assets/categories/novel.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
