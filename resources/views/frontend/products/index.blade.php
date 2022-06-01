@extends('layouts.front')

@section('title')
    {{ $products->name }}
@endsection

@section('content')

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">Collections</h6>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $prod)
                    <div class="col-md-3 mb-3">
                        <a href=" {{ url($prod->slug) }}">
                            <div class="card">
                                <img src=" {{ asset('assets/uploads/product/'.$prod->image) }}" alt="Product image">
                                <div class="card-blog">
                                    <h5>{{ $prod->name }}</h5>
                                    <small>{{ $prod->selling_price }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
