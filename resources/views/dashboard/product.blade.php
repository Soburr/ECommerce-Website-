@extends('layouts.app')
@section('content')
<div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>new arrivals</h4>
            <h2>Newton products</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="row">
    @foreach ($products as $product)

                <div class="col-md-4 pt-4">
                    <div class="product-card">
                    <span class="card-tag">{{ $product->category }}</span>
                    <div class="card-header">
                        <img src="{{ asset("storage/" .$product->image_path ) }}">
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
</div>



      </div>
    </div>
  </div>
@endsection
