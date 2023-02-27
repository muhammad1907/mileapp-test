<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class CurrectLocation extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'current_location';

    protected $fillable = [
        'transaction_id',
        'name',
        'code',
        'type',
    ];
}
