<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // protected $fillable  =['name','price','image','description'];
    protected $guarded = [];

    // اذا اسم الجدول و الملف مختلف
    // protected $table = 'courses';
    //يعمل الوقت تلقائي
    public $timestamps = true;
}
