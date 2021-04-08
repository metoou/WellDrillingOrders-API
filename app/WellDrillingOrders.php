<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WellDrillingOrders extends Model
{
    protected $fillable = [
        'customer', 'contractor', 'oilField', 'wellNumber', 'wellPurpose', 'drillingRig',
        'wellDesign', 'direction', 'conductor', 'operatingColumn', 'diameter', 'artificialFaceDepth', 'installationDepth'
    ];
}