<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollResult extends Model
{
    use HasFactory;

    public function poll_option()
    {
        return $this->belongsTo(PollOption::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}