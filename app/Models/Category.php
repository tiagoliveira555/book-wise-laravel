<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];

    public $incrementing = false;

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }
}
