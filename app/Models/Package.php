<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'tracking_code',
        'commune_id',
        'delivery_type_id',
        'status_id',
        'store_id',
        'address',
        'can_be_opened',
        'name',
        'client_first_name', 
        'client_last_name',
        'client_phone',
        'client_phone2',
        'cod_to_pay',
        'commission',
        'status_updated_at',
        'delivered_at',
        'delivery_price',
        'extra_weight_price',
        'free_delivery',
        'packaging_price',
        'partner_cod_price',
        'partner_delivery_price',
        'partner_return',
        'price',
        'price_to_pay',
        'return_price',
        'total_price',
        'weight',
    ];

    protected $casts = [
        'commune_id' => 'integer',
        'delivery_type_id'=> 'integer',
        'status_id' => 'integer',
        'store_id' => 'integer',
        'code_to_play' => 'float',
        'commition'=> 'float',
        'delivery_price'=> 'float',
        'partner_return'=> 'float',
        'price'=> 'float',
        'price_to_pay'=> 'float',
        'total_price'=> 'float',
        'partner_delivery_price' => 'float',
        'status_updated_at' => 'datetime',
        'delivered_at' => 'datetime',
        'extra_weight_price' => 'integer',
        'packaging_price' => 'integer',
        'return_price' => 'integer',
        'weight' => 'integer',
        'can_be_opened' => 'boolean',
        'free_delivery' => 'boolean',
    ];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function commune(): BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }

    public function deliveryType(): BelongsTo
    {
        return $this->belongsTo(DeliveryType::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
