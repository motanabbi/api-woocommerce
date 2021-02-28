@extends('layouts.app')

@section('content')


<div class="d-sm-flex justify-content-between align-items-center mb-4">
        <span style="color: rgb(255,255,255);font-size: 20px;font-family: 'Baloo Bhaijaan', cursive;">Add product</span>
</div>
<div class="row justify-content-md-center">
                <div class="col-lg-6">
                        <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                  <div class="p-5">

                                      <form class="user" method="post" action="{{url('/products/add')}}">
                                        @csrf
                                        
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Name..." name="name"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="type..." name="type"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Regular Price..." name="price"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Description..." name="description"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Short Description..." name="short_description"></div>
                                          <div class="form-group"><Select class="form-control"   name="categorie">
                                                @foreach($categories as $categorie)
                                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                                @endforeach
                                            </select></div>
                                          <div class="form-group"><input class="form-control form-control-user" placeholder="picture URL..." type="text"  name="image"></div>

                                          <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background-color: rgb(0,0,0);font-size: 25px;">Add Product</button>
                                          <hr>
                                          <hr>
                                      </form>
                                  </div>
                                </div>
                        </div>
                </div>

 </div>

 @endsection
