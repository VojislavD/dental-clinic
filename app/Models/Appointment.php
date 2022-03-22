<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'scheduled_at',
    ];

    protected $casts = [
        'scheduled_at' => 'datetime'
    ];

    public function fullName(): Attribute
    {
        return new Attribute(
            get: fn() => $this->first_name . ' ' . $this->last_name
        );
    }
}
