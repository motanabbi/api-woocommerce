@extends('layouts.app')

@section('content')


<div class="d-sm-flex justify-content-between align-items-center mb-4">
        <span style="color: rgb(255,255,255);font-size: 20px;font-family: 'Baloo Bhaijaan', cursive;">List of orders</span>
        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ url('/orders/excel') }}" style="background-color: rgb(0,0,0);font-family: 'Baloo Bhaijaan', cursive;"><i class="fa fa-download" style="color: rgb(255,255,255);font-size: 14px;"></i>&nbsp;download</a>
</div>
<div class="card shadow">
        <div class="card-body">
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr style="background-color: rgb(219,255,0);">
                                            <th class="text-center" style="color: rgb(0,0,0);">Order Number</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Order by</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Total price</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">status</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Date</th>
                                            <th style="color: rgb(0,0,0);">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td class="text-center">{{ $order->number }}</td>
                                            <td class="text-center">{{ $order->billing->first_name }} {{ $order->billing->last_name }} </td>
                                            <td class="text-center">{{ $order->total }}</td>
                                            <td class="text-center">{{ $order->status }}</td>
                                            <td class="text-center">{{ $order->date_created }}</td>

                                            <td class="text-center">
                                                <a href="{{ url('orders/edit/'.$order->id.'') }}" class="btn" role="button">
                                                    <i class="material-icons border rounded-0" style="color: rgb(0,0,0);font-size: 20px;">edit</i>
                                                </a>
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


        