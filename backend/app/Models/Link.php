<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'link_list_id',

        'title',
        'description',

        'slug',

        'schema',
        'host',

        'path',
        'query',
        'fragment',

        'raw_url',
    ];

    /**
     * Link belongs to one LinkList
     */
    public function linkList(): BelongsTo
    {
        return $this->belongsTo(LinkList::class, 'link_list_id', 'linkList');
    }

    /**
     * Link has many Medias
     */
    public function medias(): HasMany
    {
        return $this->hasMany(Media::class, 'link_id', 'medias');
    }

    /**
     * Link has many Actions
     */
    public function actions(): HasMany
    {
        return $this->hasMany(Action::class, 'link_id', 'actions');
    }

    /**
     * Link belongs to many Tags
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'links_tags', 'link_id', 'tag_id');
    }
}
