<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'title',
        'archetype',
        'weapon',
        'premise',
        'obstacle',
        'ambition',
        'quote',
        'image_path',
        'combat_tags',
        'power',
        'speed',
        'range',
        'difficulty',
        'display_order',
    ];

    protected $casts = [
        'combat_tags' => 'array',
        'power' => 'integer',
        'speed' => 'integer',
        'range' => 'integer',
        'difficulty' => 'integer',
        'display_order' => 'integer',
    ];

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('display_order', 'asc')->orderBy('id', 'asc');
    }
}
