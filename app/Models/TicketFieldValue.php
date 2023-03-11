<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TicketFieldValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_assign_id',
        'field_id',
        'employee_id',
        'value',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get all of the ticketAssigns for the TicketFieldValue
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ticketAssigns(): HasMany
    {
        return $this->hasMany(TicketAssign::class, 'ticket_assign_id', 'id');
    }

    /**
     * Get the ticketField that owns the TicketFieldValue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ticketField(): BelongsTo
    {
        return $this->belongsTo(TicketField::class, 'field_id', 'id');
    }

    /**
     * Get all of the employees for the TicketFieldValue
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees(): HasMany
    {
        return $this->hasMany(User::class, 'employee_id', 'id');
    }
}
