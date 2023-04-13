<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class epicgames extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getTable()
    {
        return 'produks';
    }
}
