<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConnoteCollection;
use App\Models\CurrectLocation;
use App\Models\CustomerAttributeCollection;
use App\Models\CustomFieldCollection;
use App\Models\DestinationDataCollection;
use App\Models\KoilDataCollection;
use App\Models\OriginDataCollection;
use App\Models\TransactionCollection;



class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {

    //     $validator = \Validator::make($request->all(), [
    //         'transaction_id' => 'required|string',
    //         'connote_id' => [
    //             'required',
    //             'uuid'
    //         ],
    //         'transaction_id' => 'required|string',
    //         'customer_code' => 'required|integer',
    //         'transaction_amount' => 'required|integer',
    //         'transaction_discount' => 'required|integer',
    //         'transaction_payment_type' => 'nullable|integer',
    //         'transaction_state' => 'required|in:PAID,NOT PAID',
    //         'transaction_code' => 'required|string',
    //         'transaction_order' => 'required|integer',
    //         'location_id' => 'required|string',
    //         'organization_id' => 'required|integer',
    //         'transaction_payment_type_name' => 'required|in:INVOICE,DP',
    //         'transaction_cash_amount' => 'integer',
    //         'transaction_cash_change' => 'integer',
    //         'customer_attribute' => 'required|array',
    //         'connote' => 'required|array',
    //         'origin_data' => 'required|array',
    //         'destination_data' => 'required|array',
    //         'koli_data' => 'required|array',
    //         'custom_field' => 'required|array',
    //         'currentLocation' => 'required|array'
    //     ]);
        
    //     if($validator->fails()){
    //         $data['status'] = false;
    //         $data['code'] = 400;
    //         $data['message'] = 'checkout failed';
    //         $data['errors'] = $validator->errors();
            
    //         return response()->json($data);
    //     }

    //     $transaction = TransactionCollection::create([
    //         'transaction_id' => $request->transaction_id,
    //         'connote_id' => $request->connote_id,
    //         'customer_code' => $request->customer_code,
    //         'transaction_amount' => $request->transaction_amount,
    //         'transaction_discount' => $request->transaction_discount,
    //         'transaction_additional_field' => $request->transaction_additional_field,
    //         'transaction_payment_type' => $request->transaction_payment_type,
    //         'transaction_state' => $request->transaction_state,
    //         'transaction_code' => $request->transaction_code,
    //         'transaction_order' => $request->transaction_order,
    //         'location_id' => $request->location_id,
    //         'organization_id' => $request->organization_id,
    //         'transaction_payment_type_name' => $request->transaction_payment_type_name,
    //         'transaction_cash_amount' => $request->transaction_cash_amount,
    //         'transaction_cash_change' => $request->transaction_cash_change,
    //     ]);

    //     $customerAttribute = CustomerAttributeCollection::create([
    //         'nama_sales' => $request->customer_attribute['Nama_Sales'],
    //         'top' => $request->customer_attribute['TOP'],
    //         'jenis_pelanggan' => $request->customer_attribute['Jenis_Pelanggan']
    //     ]);

    //     $connote = ConnoteCollection::create([
    //         'connote_id' => $request->connote['connote_id'],
    //         'connote_number' => $request->connote['connote_number'],
    //         'connote_service' => $request->connote['connote_service'],
    //         'connote_service_price' => $request->connote['connote_service_price'],
    //         'connote_amount' => $request->connote['connote_amount'],
    //         'connote_code' => $request->connote['connote_code'],
    //         'connote_booking_code' => $request->connote['connote_booking_code'],
    //         'connote_order' => $request->connote['connote_order'],
    //         'connote_state' => $request->connote['connote_state'],
    //         'connote_state_id' => $request->connote['connote_state_id'],
    //         'zone_code_from' => $request->connote['zone_code_from'],
    //         'zone_code_to' => $request->connote['zone_code_to'],
    //         'surcharge_amount' => $request->connote['surcharge_amount'],
    //         'actual_weight' => $request->connote['actual_weight'],
    //         'volume_weight' => $request->connote['volume_weight'],
    //         'chargeable_weight' => $request->connote['chargeable_weight'],
    //         'created_at' => $request->connote['created_at'],
    //         'updated_at' => $request->connote['updated_at'],
    //         'connote_total_package' => $request->connote['connote_total_package'],
    //         'connote_surcharge_amount' => $request->connote['connote_surcharge_amount'],
    //         'connote_sla_day' => $request->connote['connote_sla_day'],
    //         'location_name' => $request->connote['location_name'],
    //         'location_type' => $request->connote['location_type'],
    //         'source_tariff_db' => $request->connote['source_tariff_db'],
    //         'id_source_tariff' => $request->connote['id_source_tariff'],
    //         'pod' => $request->connote['pod'],
    //         'history' => $request->connote['history']
    //     ]);

    //     $originData = OriginDataCollection::create([
    //         'customer_name' => $request->origin_data['customer_name'],
    //         'customer_address' => $request->origin_data['customer_address'],
    //         'customer_email' => $request->origin_data['customer_email'],
    //         'customer_phone' => $request->origin_data['customer_phone'],
    //         'customer_address_detail' => $request->origin_data['customer_address_detail'],
    //         'customer_zip_code'  => $request->origin_data['customer_zip_code'],
    //         'zone_code'  => $request->origin_data['zone_code'],
    //         'organization_id'  => $request->origin_data['organization_id'],
    //         'location_id' => $request->origin_data['location_id']
    //     ]);

    //     $destinationData = DestinationDataCollection::create([
    //         'customer_name' => $request->destination_data['customer_name'],
    //         'customer_address' => $request->destination_data['customer_address'],
    //         'customer_email' => $request->destination_data['customer_email'],
    //         'customer_phone' => $request->destination_data['customer_phone'],
    //         'customer_address_detail' => $request->destination_data['customer_address_detail'],
    //         'customer_zip_code'  => $request->destination_data['customer_zip_code'],
    //         'zone_code'  => $request->destination_data['zone_code'],
    //         'organization_id'  => $request->destination_data['organization_id'],
    //         'location_id' => $request->destination_data['location_id']
    //     ]);

    //     foreach ($request->koli_data as $koli) {
    //         $koilData = KoilDataCollection::create([
    //             'koli_length' => $koli['koli_length'],
    //             'awb_url' => $koli['awb_url'],
    //             'created_at' => $koli['created_at'],
    //             'koli_chargeable_weight' => $koli['koli_chargeable_weight'],
    //             'koli_width' => $koli['koli_width'],
    //             'koli_surcharge' => $koli['koli_surcharge'],
    //             'koli_height' => $koli['koli_height'],
    //             'updated_at' => $koli['updated_at'],
    //             'koli_description' => $koli['koli_description'],
    //             'koli_formula_id' => $koli['koli_formula_id'],
    //             'connote_id' => $koli['connote_id'],
    //             'koli_volume' => $koli['koli_volume'],
    //             'koli_weight' => $koli['koli_weight'],
    //             'koli_id' => $koli['koli_id'],
    //             'koli_custom_field' => $koli['koli_custom_field'],
    //             'koli_code' => $koli['koli_code']
    //         ]);
    //     }
      

    //     $customField = CustomFieldCollection::create([
    //         'catatan_tambahan' => $request->custom_field['catatan_tambahan']
    //     ]);

    //     $currentLocation = CurrectLocation::create([
    //         'name'=> $request->currentLocation['name'],
    //         'code'=> $request->currentLocation['code'],
    //         'type'=> $request->currentLocation['type']
    //     ]);

    //     $status = [
    //         'error' => false,
    //         'message' => 'transaction has successfully been input to db'
    //     ];
    //     return response()->json($status, 201);
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
