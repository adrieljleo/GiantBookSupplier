<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function tr_category()
    {
        return $this->belongsTo(Tr_Category::class,'id','categoryid');
    }
}
