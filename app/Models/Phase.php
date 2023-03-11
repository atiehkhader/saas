<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phase extends Model
{
    use HasFactory;

    protected $fillable = [
        'level_id',
        'label',
        'description',
        'status',
        'is_default',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get the level that owns the Phase
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }
}
