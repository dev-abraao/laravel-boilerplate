<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'table',
        'register_id',
        'user_id',
        'type',
        'fields_changed',
        'logged_at',
    ];

    protected $casts = [
        'fields_changed' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
