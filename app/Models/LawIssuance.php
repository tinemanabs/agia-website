<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawIssuance extends Model
{
    use HasFactory;

    protected $table = 'laws';

    protected $fillable = [
        'number',
        'category',
        'date',
        'subject',
        'file',
    ];
}
