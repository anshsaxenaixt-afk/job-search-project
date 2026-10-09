<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{

protected $fillable = [
    'client_id',
    'title',
    'description',
    'budget',
    'duration',
    'status',
];

        public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function requests(): HasMany
    {
        return $this->hasMany(JobRequest::class);
    }
}
