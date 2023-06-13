<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class Customer extends Model
{
    use HasFactory, HasUuids;

    protected static function booted(): void
    {
        parent::boot();
        static::creating(function (Customer $customer) {
            $service_type = Service::find($customer->service_id)->type;
            $customer->registration = "{$service_type->code}-". Str::random(6);
            $customer->service_type_id = $service_type->id;
        });
        static::created(function (Customer $customer) {
            /** @var Service */
            $service = Service::find($customer->service_id);
            foreach ($service->files()->get() as $file) {
                Submission::create([
                    'customer_id' => $customer->id,
                    'file_id' => $file->id,
                ]);
            }
        });
        // static::updating(function (Customer $customer) {
        //     /** @var Customer */
        //     $old = Customer::find($customer->id);
        //     if ($old->id == $customer->id) return;
        // });
    }

    protected $fillable = [
        // 'registration',
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
    public function service_type()
    {
        return $this->belongsTo(ServiceType::class);
    }
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
