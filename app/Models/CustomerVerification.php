<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerVerification extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'address',
        'job',
        'telp',
        'email',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
