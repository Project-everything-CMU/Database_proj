<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offices extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        // 'ID',
        'office_code',
        'phone',
        'addr_line_1',
        'addr_line_2',
        'city',
        'state',
        'country',
        'postalcode',
        'territory'
    ];
}
