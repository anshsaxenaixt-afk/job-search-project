<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class WorkerProfile extends Model
{
    protected $fillable = [
    'user_id',
    'education',
    'experience',
    'price',
    'location',
    'bio',
    'available_days',
    'available_time',
];


        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'worker_skill');
    }
}
