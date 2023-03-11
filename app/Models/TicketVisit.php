<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TicketVisit extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'location_id',
        'date',
        'time',
        'status',
    ];

    /**
     * Get the ticket that owns the TicketVisit
     *
     * @return \
     */
    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }

    /**
     * Get the location associated with the TicketVisit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location(): HasOne
    {
        return $this->hasOne(CustomerAddress::class, 'location_id', 'id');
    }
}
