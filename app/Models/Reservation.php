<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'guests',
        'table_id',
    ];

    protected $dates = [
        'date'
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
