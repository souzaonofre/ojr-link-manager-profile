<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LinkList extends Model
{
    /** @use HasFactory<\Database\Factories\LinkListFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',

        'name',
        'description',

        'slug',
    ];

    public function links(): HasMany
    {
        return $this->hasMany(Link::class, 'link_list_id', 'links');
    }
}
