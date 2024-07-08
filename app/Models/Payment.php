<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'amount',
        'transaction_id', // From M-Pesa API
        'payment_method', // 'M-Pesa', 'Card', etc.
        'status', // 'Pending', 'Completed', 'Failed'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
