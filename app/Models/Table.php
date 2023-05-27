<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TableStatus;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'capacity',
        'status',
    ];

    protected $casts = [
        'status' => TableStatus::class
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
