@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your favourite products</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="container-fluid">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 pt-4">
                    <div class="product-card">
                        <span class="card-tag">{{ $product->category }}</span>
                        <div class="card-header">
                            <img src="{{ asset('storage/' . $product->image_path) }}">
                        </div>

                        <div class="card-body">
                            <h4 class="product-title">{{ $product->title }}</h4>
                            <p class="product-status">Shipped in 3-4 days</p>
                            <h3 class="product-prices">${{ $product->fee }}</h3>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-secondary">
                                <i class="bi bi-cart3"></i>
                                Description
                            </button>
                            <button class="btn btn-primary">
                                <i class="bi bi-bag"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div><br><br>


    <div class="row">
        <div class="col-md-12">
            <div class="next">
                <a href="{{ asset('product') }}">VIEW ALL PRODUCTS</a>
            </div>
        </div>
    </div>



    </div>
@endsection
