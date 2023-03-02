<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        
    ];


    public function type(): MorphTo
    {
        return $this->morphTo();
    }
}
