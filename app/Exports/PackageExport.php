<?php

namespace App\Exports;

use App\Models\Package;
use Maatwebsite\Excel\Concerns\FromCollection;

class PackageExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Load packages along with the related wilaya name via commune
        return Package::with('commune.wilaya')
            ->get()
            ->map(function ($package) {
                return [
                    'UUID' => $package->uuid,
                    'Tracking Code' => $package->tracking_code,
                    'Wilaya Name' => $package->commune->wilaya->name ?? 'N/A', // Add wilaya name
                    'Commune ID' => $package->commune_id,
                    'Delivery Type ID' => $package->delivery_type_id,
                    'Status ID' => $package->status_id,
                    'Address' => $package->address,
                    'Can Be Opened' => $package->can_be_opened,
                    'Name' => $package->name,
                    'Client First Name' => $package->client_first_name,
                    'Client Last Name' => $package->client_last_name,
                    'Client Phone' => $package->client_phone,
                    'Client Phone 2' => $package->client_phone2,
                    'COD to Pay' => $package->cod_to_pay,
                    'Commission' => $package->commission,
                    'Status Updated At' => $package->status_updated_at,
                    'Delivered At' => $package->delivered_at,
                    'Delivery Price' => $package->delivery_price,
                    'Extra Weight Price' => $package->extra_weight_price,
                    'Free Delivery' => $package->free_delivery,
                    'Packaging Price' => $package->packaging_price,
                    'Partner COD Price' => $package->partner_cod_price,
                    'Partner Delivery Price' => $package->partner_delivery_price,
                    'Partner Return' => $package->partner_return,
                    'Price' => $package->price,
                    'Price to Pay' => $package->price_to_pay,
                    'Return Price' => $package->return_price,
                    'Total Price' => $package->total_price,
                    'Weight' => $package->weight,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'UUID',
            'Tracking Code',
            'Wilaya Name',  // Add wilaya name header
            'Commune ID',
            'Delivery Type ID',
            'Status ID',
            'Address',
            'Can Be Opened',
            'Name',
            'Client First Name',
            'Client Last Name',
            'Client Phone',
            'Client Phone 2',
            'COD to Pay',
            'Commission',
            'Status Updated At',
            'Delivered At',
            'Delivery Price',
            'Extra Weight Price',
            'Free Delivery',
            'Packaging Price',
            'Partner COD Price',
            'Partner Delivery Price',
            'Partner Return',
            'Price',
            'Price to Pay',
            'Return Price',
            'Total Price',
            'Weight',
        ];
    }
}
