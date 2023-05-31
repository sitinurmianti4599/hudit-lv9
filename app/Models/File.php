<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'location',
        'day_estimate',

        'user_id',
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_file');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
