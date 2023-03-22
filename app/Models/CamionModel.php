<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CamionModel extends Model
{
    public function transporte()
    {
        return $this->belongsTo('App\Models\TransporteModel');

    }
}
