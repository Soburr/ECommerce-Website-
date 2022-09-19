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
                    <h2>Get your favourite Gadgets</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- Banner Ends Here -->

    <div class="flagged-card">
        <span class="flagged-tag">
            <strong> WEEKLY FEATURED </strong>
        </span>
    </div>


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
                                <a href="{{ url('product/' .$product->id) }}">Description</a>
                            </button>
                            <button class="btn btn-primary">
                                <i class="bi bi-bag"></i>
                              <a href="{{ url('add-to-cart/' .$product->id) }}">Add to cart</a>
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
                <a href="{{ asset('product') }}">VIEW MORE PRODUCTS</a>
            </div>
        </div>
    </div><br><br>



    <form action="{{ route('search') }}">
        <div class="last">
            <input type="text" name="search" placeholder="Search" required>
            <button type="submit">Search</button>
        </div>
    </form><br><br>




    </div>
@endsection
