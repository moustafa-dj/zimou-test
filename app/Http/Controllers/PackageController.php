<?php

namespace App\Http\Controllers;

use App\Contracts\PackageContract;
use App\Models\Commune;
use App\Models\DeliveryType;
use App\Models\Package;
use App\Models\Status;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    protected PackageContract $package;

    public function __construct(PackageContract $package)
    {
        $this->package = $package;
    }

    public function index()
    {
        $packages = Package::paginate(50);

        return view('admin.packages.index',compact('packages'));
    }

    public function export()
    {
        return $this->package->exportList();
    }

    public function create()
    {
        $delivery_types = DeliveryType::all();
        $communes = Commune::all();
        $statuses = Status::all();
        $stores = Store::skip(0)->take(20)->get();
        
        return view('admin.packages.create' , compact('delivery_types','communes','statuses','stores'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([ 
            'commune_id' => 'required|exists:communes,id',
            'store_id' => 'required|exists:stores,id',
            'delivery_type_id' => 'required|exists:delivery_types,id',
            'status_id' => 'required|exists:statuses,id',
            'address' => 'required|string|max:255',
            'can_be_opened' => 'required|boolean',
            'name' => 'required|string|max:100',
            'client_first_name' => 'required|string|max:100',
            'client_last_name' => 'required|string|max:100',
            'client_phone' => 'required|string|min:10|max:15',
            'client_phone2' => 'nullable|string|min:10|max:15',
            'cod_to_pay' => 'required|numeric|min:0|max:1000',
            'commission' => 'required|numeric|min:0|max:50',
            'status_updated_at' => 'required|date',
            'delivered_at' => 'nullable|date|after_or_equal:status_updated_at',
            'delivery_price' => 'required|numeric|min:5|max:100',
            'extra_weight_price' => 'required|numeric|min:0|max:50',
            'free_delivery' => 'required|boolean',
            'packaging_price' => 'required|numeric|min:0|max:20',
            'partner_cod_price' => 'required|numeric|min:0|max:100',
            'partner_delivery_price' => 'required|numeric|min:0|max:100',
            'partner_return' => 'required|numeric|min:0|max:50',
            'price' => 'required|numeric|min:10|max:500',
            'price_to_pay' => 'required|numeric|min:0|max:500',
            'return_price' => 'required|numeric|min:0|max:50',
            'total_price' => 'required|numeric|min:10|max:1000',
            'weight' => 'required|integer|min:1000|max:5000',
        ]);

        $data['uuid'] = Str::uuid()->toString();
        $data['tracking_code'] = strtoupper(Str::random(10));

        $this->package->new($data);

        return redirect()->route('packages.index');
    }

}
