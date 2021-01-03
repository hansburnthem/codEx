<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-----------------------BIOGRAPHY---------------------------

        DB::table('books')->insert([
            'book_category_id' => '1',
            'book_name' => 'Jokowi',
            'book_price' => '305000',
            'book_desc' => 'Biography 1',
            'book_img' => 'assets/categories/Biography/Biography_8.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '1',
            'book_name' => 'Einstein',
            'book_price' => '305000',
            'book_desc' => 'Biography 2',
            'book_img' => 'assets/categories/Biography/Biography_1.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '1',
            'book_name' => 'Boris Johnson',
            'book_price' => '305000',
            'book_desc' => 'Biography 3',
            'book_img' => 'assets/categories/Biography/Biography_2.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '1',
            'book_name' => 'Robert D. Kaplan',
            'book_price' => '305000',
            'book_desc' => 'Biography 4',
            'book_img' => 'assets/categories/Biography/Biography_4.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '1',
            'book_name' => 'Paul Vallely',
            'book_price' => '305000',
            'book_desc' => 'Biography 5',
            'book_img' => 'assets/categories/Biography/Biography_5.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '1',
            'book_name' => 'Alice Schroeder',
            'book_price' => '305000',
            'book_desc' => 'Biography 6',
            'book_img' => 'assets/categories/Biography/Biography_6.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '1',
            'book_name' => 'Michelle Obama',
            'book_price' => '305000',
            'book_desc' => 'Biography 7',
            'book_img' => 'assets/categories/Biography/Biography_7.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '1',
            'book_name' => 'Anne Frank',
            'book_price' => '305000',
            'book_desc' => 'Biography 8',
            'book_img' => 'assets/categories/Biography/Biography_3.jpg/'
        ]);

        //-----------------------DICTIONARY---------------------------
        DB::table('books')->insert([
            'book_category_id' => '2',
            'book_name' => 'Websters New World',
            'book_price' => '355000',
            'book_desc' => 'Dictionary',
            'book_img' => 'assets/categories/Dictionary/Dictionary_1.jpg/',
        ]);

        DB::table('books')->insert([
            'book_category_id' => '2',
            'book_name' => 'Oxford English Dictionary',
            'book_price' => '355000',
            'book_desc' => 'Dictionary',
            'book_img' => 'assets/categories/Dictionary/Dictionary_2.jpg/',
        ]);

        DB::table('books')->insert([
            'book_category_id' => '2',
            'book_name' => 'The Merriam Webster Dictonary',
            'book_price' => '355000',
            'book_desc' => 'Dictionary',
            'book_img' => 'assets/categories/Dictionary/Dictionary_3.jpg/',
        ]);

        DB::table('books')->insert([
            'book_category_id' => '2',
            'book_name' => 'Collins English Dictionary',
            'book_price' => '355000',
            'book_desc' => 'Dictionary',
            'book_img' => 'assets/categories/Dictionary/Dictionary_4.jpg/',
        ]);

        DB::table('books')->insert([
            'book_category_id' => '2',
            'book_name' => 'English-Hindi for Student',
            'book_price' => '355000',
            'book_desc' => 'Dictionary',
            'book_img' => 'assets/categories/Dictionary/Dictionary_5.jpg/',
        ]);

        DB::table('books')->insert([
            'book_category_id' => '2',
            'book_name' => 'The Surgeon of Crowthorne',
            'book_price' => '355000',
            'book_desc' => 'Dictionary',
            'book_img' => 'assets/categories/Dictionary/Dictionary_6.jpg/',
        ]);

        DB::table('books')->insert([
            'book_category_id' => '2',
            'book_name' => 'Hiberno-English Dictionary',
            'book_price' => '355000',
            'book_desc' => 'Dictionary 7',
            'book_img' => 'assets/categories/Dictionary/Dictionary_7.jpg/',
        ]);

        DB::table('books')->insert([
            'book_category_id' => '2',
            'book_name' => 'The Merriam-Webster Dictionary',
            'book_price' => '355000',
            'book_desc' => 'Dictionary',
            'book_img' => 'assets/categories/Dictionary/Dictionary_8.jpg/',
        ]);

        

        //-----------------------ENSIKLOPEDIA---------------------------
        DB::table('books')->insert([
            'book_category_id' => '3',
            'book_name' => 'Think like a UI/UX Researcher',
            'book_price' => '505000',
            'book_desc' => 'Ensiklopedia 1',
            'book_img' => 'assets/categories/Ensiklopedia/Ensikopedia_8.jpg',
        ]);

        DB::table('books')->insert([
            'book_category_id' => '3',
            'book_name' => 'CRC C.E. of Mathematics',
            'book_price' => '505000',
            'book_desc' => 'Ensiklopedia 2',
            'book_img' => 'assets/categories/Ensiklopedia/Ensikopedia_2.jpg',
        ]);
        
        DB::table('books')->insert([
            'book_category_id' => '3',
            'book_name' => 'Math for Engineers and Scientists',
            'book_price' => '505000',
            'book_desc' => 'Ensiklopedia 3',
            'book_img' => 'assets/categories/Ensiklopedia/Ensikopedia_3.jpg',
        ]);
        
        DB::table('books')->insert([
            'book_category_id' => '3',
            'book_name' => 'Marketing Management',
            'book_price' => '505000',
            'book_desc' => 'Ensiklopedia 4',
            'book_img' => 'assets/categories/Ensiklopedia/Ensikopedia_4.jpg',
        ]);
        
        DB::table('books')->insert([
            'book_category_id' => '3',
            'book_name' => 'Human Resource Management',
            'book_price' => '505000',
            'book_desc' => 'Ensiklopedia 5',
            'book_img' => 'assets/categories/Ensiklopedia/Ensikopedia_5.jpg',
        ]);
        
        DB::table('books')->insert([
            'book_category_id' => '3',
            'book_name' => 'Botani Farmasi',
            'book_price' => '505000',
            'book_desc' => 'Ensiklopedia 6',
            'book_img' => 'assets/categories/Ensiklopedia/Ensikopedia_6.jpg',
        ]);
        
        DB::table('books')->insert([
            'book_category_id' => '3',
            'book_name' => 'Want to be Commercial Pilot',
            'book_price' => '505000',
            'book_desc' => 'Ensiklopedia 7',
            'book_img' => 'assets/categories/Ensiklopedia/Ensikopedia_7.jpg',
        ]);

        DB::table('books')->insert([
            'book_category_id' => '3',
            'book_name' => 'Dictionary of Computer Science',
            'book_price' => '505000',
            'book_desc' => 'Ensiklopedia 8',
            'book_img' => 'assets/categories/Ensiklopedia/Ensikopedia_1.jpg',
        ]);



        //-----------------------NOVEL---------------------------
        DB::table('books')->insert([
            'book_category_id' => '4',
            'book_name' => 'Snow White Huntsman',
            'book_price' => '305000',
            'book_desc' => 'Novel 1',
            'book_img' => 'assets/categories/Novel/Novel_1.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '4',
            'book_name' => 'Water & Hame',
            'book_price' => '305000',
            'book_desc' => 'Novel 2',
            'book_img' => 'assets/categories/Novel/Novel_2.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '4',
            'book_name' => 'Fire and Blood',
            'book_price' => '305000',
            'book_desc' => 'Novel 3',
            'book_img' => 'assets/categories/Novel/Novel_3.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '4',
            'book_name' => 'Me Before You',
            'book_price' => '305000',
            'book_desc' => 'Novel 4',
            'book_img' => 'assets/categories/Novel/Novel_4.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '4',
            'book_name' => 'The Institute',
            'book_price' => '305000',
            'book_desc' => 'Novel 5',
            'book_img' => 'assets/categories/Novel/Novel_5.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '4',
            'book_name' => 'Fantasy Cover',
            'book_price' => '305000',
            'book_desc' => 'Novel 6',
            'book_img' => 'assets/categories/Novel/Novel_6.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '4',
            'book_name' => 'Virgin River',
            'book_price' => '305000',
            'book_desc' => 'Novel 7',
            'book_img' => 'assets/categories/Novel/Novel_7.jpg/'
        ]);

        DB::table('books')->insert([
            'book_category_id' => '4',
            'book_name' => 'Percy Jacson and The Olympians',
            'book_price' => '305000',
            'book_desc' => 'Novel 8',
            'book_img' => 'assets/categories/Novel/Novel_8.jpg/'
        ]);
    }
}
