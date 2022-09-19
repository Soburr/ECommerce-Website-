@extends('layouts.app')

@section('content')
    <br><br><br><br><br>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <img src="{{ asset('storage/' . $products->image_path) }}">
                </div><br>
            </div>
            <div class="type">
                <h1 style="font-size: 23px; font-family: cursive;">{{ $products->title }}</h1><br>
                <div class="second-type">
                    <p>Condition: {{ $products->condition }}</p>
                    <p style="margin-right: 280px;">Type: {{ $products->type }}</p><br>
                </div>
                <h2 style="margin-right: 265px; font-size: 19px; font-family: cursive;">RAM SIZE</h2><br>
                <div class="third-type">
                    <button> {{ $products->ram_size }}</button><br><br>
                </div>
                <h1 style="font-size: 25px; font-weight: 400; margin-right: 220px; font-family: cursive;">
                    ${{ $products->fee }}</h1><br>
                <div class="fourth-type">
                    <button>MORE ABOUT THIS PRODUCT</button><br><br>
                </div>
                <h2>{{ $products->description }}</h2>
            </div>
        </div>
    </div>


    <br><br><br><br><br>
@endsection
