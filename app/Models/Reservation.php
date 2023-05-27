<?php

namespace App\Models;

use App\Models\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    protected $fillable = ['name', 'phone', 'date', 'time', 'status', 'party_size', 'table_id', 'special_requests'];

    public function tables()
    {
        return $this->hasMany(Table::class);
    }
}
