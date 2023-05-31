<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'registration',
        'photo',
        'name',
        'address',
        'job',
        'telp',
        'progress',
        'status',
        'order_date',
        'done_date',
        'service_id',
        'service_type_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
