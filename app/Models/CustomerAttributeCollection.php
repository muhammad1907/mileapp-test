<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class CustomerAttributeCollection extends Model
{

    protected $connection = 'mongodb';

    protected $collection = 'customer_attribute_collection';

    protected $fillable = [
        'transaction_id',
        'nama_sales',
        'top',
        'jenis_pelanggan',
    ];
 
}
