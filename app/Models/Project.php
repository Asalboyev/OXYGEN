<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable=['name_uz','name_ru','name_en','title_uz','title_en','title_ru','m_name','v_time','apartement','cost','images'];
}
