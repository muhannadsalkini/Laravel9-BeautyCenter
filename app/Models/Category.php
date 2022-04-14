<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $appends = [
        'parent',
    ];

    // One To Many
    /**
     * @return HasMany
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    // One To Many Inverse
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    // One To Many
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

}
