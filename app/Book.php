<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // /**
    //  * The table associated with the model.
    //  *
    //  * @var string
    //  */
    protected $table = 'books';
    protected $fillable=['book_category_id','book_name','book_price','book_desc','book_img'];

    // /**
    //  * The primary key associated with the table.
    //  *
    //  * @var string
    //  */
    // protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo(BookCategory::class);
    }
}
