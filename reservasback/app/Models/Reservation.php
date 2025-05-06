<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model {
    protected $fillable = [
        'user_id', 'product_id', 'reservation_code', 'quantity',
        'total_amount', 'status', 'start_date'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }

    public function payment(): HasOne {
        return $this->hasOne(Payment::class);
    }
}
