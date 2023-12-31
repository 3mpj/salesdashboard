<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public function package(){
        return $this->belongsTo(Package::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
