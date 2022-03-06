<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // protected $fillable = ['title','body','image','rate_new'];

    protected $guarded = []; //  الحقول الممنوعة اذا فارغ يتم قبول كل الحقول
}
