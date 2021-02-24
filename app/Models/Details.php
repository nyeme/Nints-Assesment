<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Shipment;

class Details extends Model
{
    use HasFactory;
    protected $fillable = ['uname','uemail','uaddress','shipment_id','location_id','weight'];



    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }
}
