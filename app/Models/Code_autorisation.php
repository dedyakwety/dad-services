<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code_autorisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'expertise1',
        'expertise2',
        'expertise3',
        'code',
    ];
}
