<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Table extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    protected $fillable = ['name', 'capacity', 'status'];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
