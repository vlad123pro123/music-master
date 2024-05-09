<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'album_id',
        'record_id',
        'image_url'
    ];

    /**
     * @return HasManyThrough
     */
    public function genres(): HasManyThrough
    {
        return $this->hasManyThrough(Genre::class, Record::class, 'id', 'id', 'id', 'id');
    }

    /**
     * @return HasMany
     */
    public function records(): HasMany
    {
        return $this->hasMany(Record::class);
    }

    /**
     * @return HasMany
     */
    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }
}
