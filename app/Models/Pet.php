<?php

namespace App\Models;

use App\Enums\Gender;
use App\Enums\Species;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'name',
        'gender',
        'species',
        'race',
        'castrated',
        'height',
        'weight',
        'birth',
    ];

    protected $casts = [
        'gender' => Gender::class,
        'species' => Species::class,
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
