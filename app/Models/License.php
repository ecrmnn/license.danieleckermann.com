<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function isExpired()
    {
        return $this->expires_at < now();
    }
}
