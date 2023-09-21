<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Submission extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'proof',
        'status',
        'date',
        'done',
        'information',
        'customer_id',
        'file_id',
    ];
    protected $casts = [
        'date' => 'datetime:Y-m-d',
    ];

    public function setProofAttribute($value)
    {
        if (is_null($value)) {
            $this->attributes['proof'] = null;
        } else if (is_string($value)) {
            $this->attributes['proof'] = $value;
        } else {
            if (isset($this->attributes['proof'])) {
                Storage::delete($this->attributes['proof']);
            }
            $path = $this->id ? "$this->id" : 'temp';
            $this->attributes['proof'] = Storage::put("administrator/$path", $value);
        }
    }
    public function getProofUrlAttribute()
    {
        if (Str::of($this->proof)->startsWith('http')) {
            return $this->proof;
        } else {
            return Storage::url($this->proof);
        }
    }
    public function getProofNameAttribute()
    {
        return basename($this->proof);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function file()
    {
        return $this->belongsTo(File::class);
    }
}
