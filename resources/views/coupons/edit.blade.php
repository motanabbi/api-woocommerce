@extends('layouts.app')

@section('content')

<div class="d-sm-flex justify-content-between align-items-center mb-4">
        <span style="color: rgb(255,255,255);font-size: 20px;font-family: 'Baloo Bhaijaan', cursive;">Update coupon</span>
</div>
<div class="row justify-content-md-center">
                <div class="col-lg-6">
                        <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                  <div class="p-5">

                                  <form class="user" method="post" action="{{url('/coupons/update')}}" >
                                        @csrf
                                        <div class="form-group"><input class="form-control form-control-user" type="hidden"  value="{{ $coupon->id }}"  name="id"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="text" readonly value="{{ $coupon->code }}"  name="code"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Amount..." name="amount"></div>

                                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background-color: rgb(0,0,0);font-size: 25px;">Update</button>
                                        <hr>
                                        <hr>
                                    </form>
                                  </div>
                                </div>
                        </div>
                </div>

 </div>

 @endsection
