<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Address extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'addr_ID',
        'NO',
        'addr_line_1',
        'addr_line_2',
        'city',
        'state',
        'postalcode'
    ];
}
