@extends('layouts.app')

@section('content')
     
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    
            <span style="color: rgb(255,255,255);font-size: 20px;font-family: 'Baloo Bhaijaan', cursive;">
                <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ url('/products/create') }}" style="background-color: rgb(0,0,0);font-family: 'Baloo Bhaijaan', cursive;">&nbsp;Add Product</a>
            </span>
            <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ url('/products/excel') }}" style="background-color: rgb(0,0,0);font-family: 'Baloo Bhaijaan', cursive;"><i class="fa fa-download" style="color: rgb(255,255,255);font-size: 14px;"></i>&nbsp;download</a>
</div>
<div class="card shadow">
            <div class="card-body">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr style="background-color: rgb(219,255,0);">
                                            <th class="text-center" style="color: rgb(0,0,0);">ID</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Product</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Status</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Price</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Sales</th>
                                            <th class="text-center" style="color: rgb(0,0,0);">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($listproducts as $product)
                                        <tr>
                                            <td class="text-center">{{ $product->id }}<br></td>
                                            <td class="text-center"><img class="rounded-circle mr-2" width="30" height="30" src="{{ $product->images[0]->src}}">{{$product->name}}<br></td>
                                            <td class="text-center">{{ $product->status }}</td>
                                            <td class="text-center">{{ $product->price }}</td>
                                            <td  class="text-center">{{ $product->total_sales }}</td>
                                            <td class="text-center">
                                                <form  class="text-black" action="{{ url('products/delete') }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="{{ url('products/edit/'.$product->id.'') }}" class="btn" role="button"> <i class="material-icons border rounded-0" style="color: rgb(0,0,0);font-size: 20px;">edit</i></a>
                                                <button type="submit"  class="btn" name="id" value="{{ $product->id }}" > <i class="material-icons border rounded-0" style="color: rgb(0,0,0);font-size: 20px;">delete_forever</i></button>
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

        