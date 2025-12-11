<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    /** @use HasFactory<\Database\Factories\MediaFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'link_id',
        'storage_disk',
        'media_type',
        'file_type',
        'file_path',
        'file_hash',
        'active',
    ];

    /**
     * Media belongs to one Link
     */
    public function link(): BelongsTo
    {
        return $this->belongsTo(Link::class, 'link_id', 'link');
    }
}
