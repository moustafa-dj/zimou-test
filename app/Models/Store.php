<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model
{
    use HasFactory;


    protected $fillable = [
        'code',
        'name',
        'email',
        'phones',
        'company_name',
        'capital',
        'address',
        'register_commerce_number',
        'nif',
        'legal_form',
        'status',
        'can_update_preparing_packages',
    ];

    protected $casts = [
        'legal_form' => 'integer',
        'status' => 'integer',
        'can_update_preparing_packages' => 'boolean',
    ];

    public function packages(): HasMany
    {
        return $this->hasMany(Package::class);
    }
}
