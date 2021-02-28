@extends('layouts.app')

@section('content')

<div class="d-sm-flex justify-content-between align-items-center mb-4">
        <span style="color: rgb(255,255,255);font-size: 20px;font-family: 'Baloo Bhaijaan', cursive;">Update order</span>
</div>
<div class="row justify-content-md-center">
                <div class="col-lg-6">
                        <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                  <div class="p-5">

                                    <form class="user" method="post" action="{{url('/orders/update')}}" >
                                        @csrf
                                        <div class="form-group"><input class="form-control form-control-user" type="text" readonly value="{{ $order->id }}"  name="id"></div>
                                        <div class="form-group">
                                            <Select class="form-control"  name="status">
                                                <option value="pending">Pending payment</option>
                                                <option value="processing">Processing</option>
                                                <option value="on-hold">On hold</option>
                                                <option value="completed">Completed</option>
                                                <option value="cancelled">Cancelled</option>
                                                <option value="refunded">Refunded</option>
                                                <option value="failed">Failed</option>
                                            </select>
                                        </div>
                                       
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
