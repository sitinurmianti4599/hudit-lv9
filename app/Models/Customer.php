<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class Customer extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        // 'registration',
        'photo',
        'name',
        'address',
        'job',
        'telp',
        'email',
        'progress',
        'status',
        'order_date',
        'done_date',
        'service_id',
        'service_type_id',
    ];
    protected $casts = [
        'order_date' => 'datetime:Y-m-d',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function service_type()
    {
        return $this->belongsTo(ServiceType::class);
    }
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
