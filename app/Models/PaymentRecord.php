<?php

namespace App\Models;

use App\User;
use Eloquent;

class PaymentRecord extends Eloquent
{
    protected $fillable =[
        'student_id',
        'payment_id',
        'amt_paid',
        'month',
        'year',
        'balance',
        'tution_fee',
        'khoraki',
        'discount',
        'due',
        'paid',
        'ref_no',
        'is_residential'
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function receipt()
    {
        return $this->hasMany(Receipt::class, 'pr_id');
    }
}
