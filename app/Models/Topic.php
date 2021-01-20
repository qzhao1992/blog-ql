<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    protected $fillable = ['name', 'slug'];
    use HasFactory;
    public function posts(): HasMany{
        return $this->hasMany(Post::class);
    }
}
