<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $table='book_categories';
    protected $fillable =['category_name','category_img'];


    public function books() {
        return $this->hasMany(Book::class);
    }
}
