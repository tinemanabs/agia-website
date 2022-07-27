<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisoryCouncil extends Model
{
    use HasFactory;

    protected $table = 'advisorycouncil';

    protected $fillable = [
        'name',
        'detail',
        'year',
    ];
}
