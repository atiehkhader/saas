<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TicketAssign extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'user_id',
        'phase_id',
        'ticket_manager',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get the ticket that owns the TicketAssign
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }

/**
 * Get all of the users for the TicketAssign
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function users(): HasMany
{
    return $this->hasMany(User::class, 'user_id', 'id');
}

    /**
     * Get the phase associated with the TicketAssign
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function phase(): HasOne
    {
        return $this->hasOne(Phase::class, 'phase_id', 'id');
    }
}
