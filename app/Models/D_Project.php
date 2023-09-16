<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class D_Project extends Model
{
    use HasFactory;
    protected $fillable=['name_uz','name_ru','name_en','price','square','balcony','bathroom','bedroom','hallway','hitchen','images'];

}
