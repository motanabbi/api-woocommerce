@extends('layouts.app')

@section('content')

<div class="d-sm-flex justify-content-between align-items-center mb-4">


            <span style="color: rgb(255,255,255);font-size: 20px;"> 
                <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ url('coupons/create') }}" style="background-color: rgb(0,0,0);font-family: 'Baloo Bhaijaan', cursive;">new coupon</a>
            </span>
            <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ url('/coupons/excel') }}" style="background-color: rgb(0,0,0);font-family: 'Baloo Bhaijaan', cursive;"><i class="fa fa-download" style="color: rgb(255,255,255);font-size: 14px;"></i>&nbsp;download</a>
</div>
<div class="card shadow">
            <div class="card-body">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr style="background-color: rgb(219,255,0);">
                                            <th class="text-center" style="color: rgb(0,0,0);">ID</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Code</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Amount</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Last update</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($coupons as $coupon)
                                        <tr>
                                            <td class="text-center">{{ $coupon->id }}</td>
                                            <td class="text-center">{{ $coupon->code }}</td>
                                            <td class="text-center">{{ $coupon->amount }}</td>
                                            <td class="text-center">{{ $coupon->date_modified }}</td>
                                            <td class="text-center">
                                            <form action="{{ url('coupons/delete') }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                                <a href="{{ url('coupons/edit/'.$coupon->id.'') }}" class="btn" role="button"><i class="material-icons border rounded-0" style="color: rgb(0,0,0);font-size: 20px;">edit</i></a>
                                                <button type="submit"  class="btn" name="id" value="{{ $coupon->id }}" ><i class="material-icons border rounded-0" style="color: rgb(0,0,0);font-size: 20px;">delete_forever</i></button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach    
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                        </div>
            </div>
</div>
  
@endsection
