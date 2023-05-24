<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function tr_category()
    {
        return $this->belongsTo(Tr_Category::class,'id','bookid');
    }
    public function publisher()
    {
        return $this->hasOne(Publisher::class,'id','publisherid');
    }
}
