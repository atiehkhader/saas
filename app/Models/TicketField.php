<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TicketField extends Model
{
    use HasFactory;

    protected $fillable = [
        'phase_id',
        'is_required',
        'type',
        'label',
        'description',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get all of the phases for the TicketField
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phases(): HasMany
    {
        return $this->hasMany(Phase::class, 'phase_id', 'id');
    }
}
