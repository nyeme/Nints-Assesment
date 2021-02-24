<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Details;

class Shipment extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function details()
    {
        return $this->hasMany(Details::class);
    }
}
