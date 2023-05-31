<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cost',

        'service_type_id',
    ];

    public function files()
    {
        return $this->belongsToMany(File::class, 'service_file');
    }
    public function type()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id');
    }
}
