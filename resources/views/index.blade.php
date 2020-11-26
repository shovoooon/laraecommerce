@extends('layouts.master')

@section('content')
    {{--start sidebar and content--}}

    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-4">
                @include('partials.sidebar-default')
            </div>

            <div class="col-md-8">
                <div class="widget">
                    <h3>Featured Products</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('images/products/iphone.jpeg') }}" class="card-img-top img-product" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">iPhone 7</h5>
                                    <p class="card-text">Price - 111000/-</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('images/products/iphone.jpeg') }}" class="card-img-top img-product" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">iPhone 7</h5>
                                    <p class="card-text">Price - 111000/-</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('images/products/iphone.jpeg') }}" class="card-img-top img-product" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">iPhone 7</h5>
                                    <p class="card-text">Price - 111000/-</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('images/products/iphone.jpeg') }}" class="card-img-top img-product" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">iPhone 7</h5>
                                    <p class="card-text">Price - 111000/-</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{--end sidebar and content--}}
@endsection
