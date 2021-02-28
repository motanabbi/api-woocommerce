@extends('layouts.app')

@section('content')

<div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0"></h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#" style="background-color: rgb(0,0,0);color: rgb(255,255,255);"><i class="fas fa-arrow-alt-circle-down fa-sm text-white-50" style="color: #f2f2f2;"></i>&nbsp;Generate Report</a>
</div>
<div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span style="color: rgb(0,0,0);">orders</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>{{ $count_orders }}</span></div>
                                        </div>
                                        <div class="col-auto"><i class="material-icons" style="color: rgb(0,0,0);font-size: 34px;">local_grocery_store</i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span style="color: rgb(0,0,0);">Total ventes</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>$ {{ $sales[0]->total_sales }}</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign" style="color: rgb(0,0,0);font-size: 34px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span style="color: rgb(0,0,0);">Products</span></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="text-dark font-weight-bold h5 mb-0"><span>{{ $count_products }}</span></div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="far fa-list-alt" style="color: rgb(0,0,0);font-size: 34px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span style="color: rgb(0,0,0);">COdes Promo</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>{{ $count_coupons }}</span></div>
                                        </div>
                                        <div class="col-auto"><i class="icon ion-android-favorite" style="color: rgb(0,0,0);font-size: 34px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

@endsection