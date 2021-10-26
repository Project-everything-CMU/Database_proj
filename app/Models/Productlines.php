<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productlines extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'productline',
        'text_description',
        'html_description',
        'imageBL'
    ];
}
