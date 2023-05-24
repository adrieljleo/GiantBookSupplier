<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tr_Category extends Model
{
    use HasFactory;
    protected $table = 'tr_categories';

    public function category()
    {
        return $this->hasOne(Category::class,'id','categoryid');
    }

    public function book()
    {
        return $this->hasOne(Book::class,'id','bookid');
    }
}
