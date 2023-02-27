<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class OriginDataCollection extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'origin_data';

    protected $fillable = [
        'transaction_id',
        'customer_name',
        'customer_address',
        'customer_email',
        'customer_phone',
        'customer_address_detail',
        'customer_zip_code',
        'zone_code',
        'organization_id',
        'location_id'
    ];
}
