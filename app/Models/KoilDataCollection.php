<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class KoilDataCollection extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'koil_data';

    protected $fillable = [
        'transaction_id',
        'koli_length',
        'awb_url',
        'created_at',
        'koli_chargeable_weight',
        'koli_width',
        'koli_surcharge',
        'koli_height',
        'updated_at',
        'koli_description',
        'koli_formula_id',
        'connote_id',
        'koli_volume',
        'koli_weight',
        'koli_id',
        'koli_custom_field',
        'koli_code',
    ];

    protected $casts = [
        'koli_length' => 'integer',
        'koli_chargeable_weight' => 'integer',
        'koli_width' => 'integer',
        'koli_height' => 'integer',
        'koli_formula_id' => 'integer',
        'koli_volume' => 'integer',
        'koli_weight' => 'integer',
        'koli_custom_field' => 'array',
    ];

  
}
