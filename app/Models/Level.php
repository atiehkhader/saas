<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'parent_id',
        'label',
    ];

    /**
     * Get all of the phases for the Level
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phases(): HasMany
    {
        return $this->hasMany(Phase::class);
    }
}
