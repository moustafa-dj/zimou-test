@extends('admin.layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Package Form</h5>

        <!-- Horizontal Form -->
        <form method="post" action="{{ route('packages.store')}}">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Stores</label>
                <div class="col-sm-10">
                    <select class="form-select @error('store_id') is-invalid @enderror" aria-label="Default select example" name="store_id">
                        <option value="" selected>Select a store</option>
                        @foreach($stores as $store) 
                            <option value="{{$store->id}}">{{$store->name}}</option>
                        @endforeach
                    </select>
                    @error('store_id')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Commune</label>
                <div class="col-sm-10">
                    <select class="form-select @error('commune_id') is-invalid @enderror" aria-label="Default select example" name="commune_id">
                        <option value="" selected>Select a commune</option>
                        @foreach($communes as $commune) 
                            <option value="{{$commune->id}}">{{$commune->name}}</option>
                        @endforeach
                    </select>
                    @error('commune_id')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Delivery Type</label>
                <div class="col-sm-10">
                    <select class="form-select @error('delivery_type_id') is-invalid @enderror" aria-label="Default select example" name="delivery_type_id">
                        <option value="" selected>Select a delivery type</option>
                        @foreach($delivery_types as $deliveryType) 
                            <option value="{{$deliveryType->id}}">{{$deliveryType->name}}</option>
                        @endforeach
                    </select>
                    @error('delivery_type_id')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-select @error('status_id') is-invalid @enderror" aria-label="Default select example" name="status_id">
                        <option value="" selected>Select a status</option>
                        @foreach($statuses as $status) 
                            <option value="{{$status->id}}">{{$status->name}}</option>
                        @endforeach
                    </select>
                    @error('status_id')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="inputText" name="address">
                    @error('address')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2 col-form-label">Can be opened</div>
                <div class="col-sm-10">
                    <div class="form-check form-switch">
                        <input class="form-check-input @error('can_be_opened') is-invalid @enderror" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="can_be_opened" value="1">
                        @error('can_be_opened')
                            <span class="invalid-feedback">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputText" name="name">
                    @error('name')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Client First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('client_first_name') is-invalid @enderror" id="inputText" name="client_first_name">
                    @error('client_first_name')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Client Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('client_last_name') is-invalid @enderror" id="inputText" name="client_last_name">
                    @error('client_last_name')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Client Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('client_phone') is-invalid @enderror" id="inputText" name="client_phone">
                    @error('client_phone')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Client Phone 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('client_phone2') is-invalid @enderror" id="inputText" name="client_phone2">
                    @error('client_phone2')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">COD to Pay</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('cod_to_pay') is-invalid @enderror" id="inputText" name="cod_to_pay">
                    @error('cod_to_pay')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Commission</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('commission') is-invalid @enderror" id="inputText" name="commission">
                    @error('commission')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Status Updated At</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('status_updated_at') is-invalid @enderror" id="inputText" name="status_updated_at">
                    @error('status_updated_at')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Delivered At</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('delivered_at') is-invalid @enderror" id="inputText" name="delivered_at">
                    @error('delivered_at')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Delivery Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('delivery_price') is-invalid @enderror" id="inputText" name="delivery_price">
                    @error('delivery_price')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Extra Weight Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('extra_weight_price') is-invalid @enderror" id="inputText" name="extra_weight_price">
                    @error('extra_weight_price')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2 col-form-label">Free Delivery</div>
                <div class="col-sm-10">
                    <div class="form-check form-switch">
                        <input class="form-check-input @error('free_delivery') is-invalid @enderror" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="free_delivery" value="1">
                        @error('free_delivery')
                            <span class="invalid-feedback">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Packaging Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('packaging_price') is-invalid @enderror" id="inputText" name="packaging_price">
                    @error('packaging_price')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Partner COD Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('partner_cod_price') is-invalid @enderror" id="inputText" name="partner_cod_price">
                    @error('partner_cod_price')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Partner Delivery Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('partner_delivery_price') is-invalid @enderror" id="inputText" name="partner_delivery_price">
                    @error('partner_delivery_price')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Partner Return</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('partner_return') is-invalid @enderror" id="inputText" name="partner_return">
                    @error('partner_return')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="inputText" name="price">
                    @error('price')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Price to Pay</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('price_to_pay') is-invalid @enderror" id="inputText" name="price_to_pay">
                    @error('price_to_pay')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Return Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('return_price') is-invalid @enderror" id="inputText" name="return_price">
                    @error('return_price')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Total Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control @error('total_price') is-invalid @enderror" id="inputText" name="total_price">
                    @error('total_price')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Weight</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('weight') is-invalid @enderror" id="inputText" name="weight">
                    @error('weight')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
@endsection