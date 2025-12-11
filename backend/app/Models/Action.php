<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Action extends Model
{
    /** @use HasFactory<\Database\Factories\ActionFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'link_id',

        'name',
        'handle',
        'resources',

        'timeout',
        'active',
    ];

    /**
     * Action belongs to one Link
     */
    public function link(): BelongsTo
    {
        return $this->belongsTo(Link::class, 'link_id', 'link');
    }
}
