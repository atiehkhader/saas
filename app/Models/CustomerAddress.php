<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'country_id',
        'state_id',
        'city_id',
        'street',
        'building_number',
        'apartment_number',
        'zip_code',
        'latitude',
        'longitude',
        'additional_info',
    ];

    /**
     * Get the customer that owns the CustomerAddress
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
