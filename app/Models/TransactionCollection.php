<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class TransactionCollection extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'transaction_collection';

    protected $fillable = [
        'transaction_id',
        'customer_name',
        'customer_code',
        'transaction_amount',
        'transaction_discount',
        'transaction_additional_field',
        'transaction_payment_type',
        'transaction_state',
        'transaction_code',
        'transaction_order',
        'location_id',
        'organization_id',
        'created_at',
        'updated_at',
        'transaction_payment_type_name',
        'transaction_cash_amount',
        'transaction_cash_change',
        'connote_id',
    ];

    
    public function customerAttribute()
    {
        return $this->hasOne(CustomerAttributeCollection::class ,'transaction_id', 'transaction_id');
    }

    public function connote()
    {
        return $this->hasOne(ConnoteCollection::class, 'connote_id', 'connote_id');
    }

    public function originData()
    {
        return $this->hasOne(OriginDataCollection::class,'transaction_id', 'transaction_id');
    }

    public function destinationData()
    {
        return $this->hasOne(DestinationDataCollection::class,'transaction_id', 'transaction_id');
    }
    
    public function currentLocation()
    {
        return $this->hasOne(CurrectLocation::class,'transaction_id', 'transaction_id');
    }

    public function customField()
    {
        return $this->hasOne(CustomFieldCollection::class,'transaction_id', 'transaction_id');
    }

    public function koliData()
    {
        return $this->hasMany(KoilDataCollection::class,'transaction_id', 'transaction_id');
    }
}
