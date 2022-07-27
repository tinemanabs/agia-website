<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardOfDirector extends Model
{
    use HasFactory;

    protected $table = 'boardofdirectors';

    protected $fillable = [
        'name',
        'category',
        'position',
        'detail1',
        'detail2',
        'detail3',
    ];
}
