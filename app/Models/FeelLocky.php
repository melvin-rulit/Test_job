<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeelLocky extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'client_id',
        'feel_locky',
        'created_at',
    ];

    public function client(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
