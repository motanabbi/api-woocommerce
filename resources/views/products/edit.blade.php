@extends('layouts.app')

@section('content')

<div class="d-sm-flex justify-content-between align-items-center mb-4">
        <span style="color: rgb(255,255,255);font-size: 20px;font-family: 'Baloo Bhaijaan', cursive;">Update product</span>
</div>
<div class="row justify-content-md-center">
                <div class="col-lg-6">
                        <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                  <div class="p-5">

                                    <form class="user" method="post" action="{{url('/products/update')}}" >
                                        @csrf
                                          <div class="form-group"><input class="form-control form-control-user" type="text" readonly  value="{{ $product->id }}"  name="id"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  value="{{ $product->name }}"  name="name"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  value="{{ $product->type }}"  name="type"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  value="{{ $product->price }}" name="price"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  value="{{ $product->description }}" name="description"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  value="{{ $product->short_description }}" name="short_description"></div>
                                          <div class="form-group"><Select class="form-control"   name="categorie">
                                                @foreach($categories as $categorie)
                                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                                @endforeach
                                            </select></div>
                                          <div class="form-group"><input class="form-control form-control-user" placeholder="picture URL..." type="text"  value="{{ $product->images[0]->src }}"   name="image"></div>

                                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background-color: rgb(0,0,0);font-size: 25px;">Update Product</button>
                                        <hr>
                                        <hr>
                                    </form>
                                  </div>
                                </div>
                        </div>
                </div>

 </div>

 @endsection
