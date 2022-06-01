@extends('layouts.front')

@section('title', $products->name)

@section('content')
    <main class="main-content" role="main">
        <div class="product-page">
            <div class="wrapper" data-product-wrapper="">
                <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                    <a href="{{ url('/') }}" title="Back to the frontpage">Home</a>
                    <span aria-hidden="true">›</span>
                    <span title="This page" href="{{ url($products->slug) }}">{{ $products->name }}</span>
                </nav>
                <div class="grid product-single">
                    <div class="grid__item large--two-thirds">

                        <!-- Slideshow container -->

                        <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                                <div class="numbertext">1 / 1</div>
                                <img src="{{ asset('assets/uploads/product/'.$products->image) }}" style="width:100%">
                            </div>


                            <!-- Next and previous buttons -->
                            <a class="prevProduct" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="nextProduct" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>

                    <!--  Slideshow container  -->

                    <div class="grid__item large--one-third" id="productInfo-product">
                        <div class="text-center">
                            <h5 class="product__price uppercase h5">
                                <span class="money"><span id="ProductPrice-product"><span class="money"><s>${{ $products->original_price }}</s></span></span></span>

                                <p class="small compare-at em" id="ComparePriceWrapper-product" style="display: none">
                                    <span class="money"><span id="ComparePrice-product">${{ $products->selling_price }}</span></span>
                                </p>
                            </h5>
                            <h1 class="h2">Cotton Linen Pajamas</h1>
                            <div class="product-description rte">
                                <ul>
                                    <li>{!!  $products->small_description !!}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="product__form">
                            <div id="AddToCartForm-product" data-section="product" class="product-form-product product-form">
                                <form action="/cart">
                                    <div class="selector-wrapper js">
                                        <label for="SingleOptionSelector-product-0">
                                            Stock
                                        </label>
                                        @if($products->quantity > 0)
                                            <label class="badge bg-success">In stock</label>
                                        @else
                                            <label class="badge bg-danger">Out of stock</label>
                                        @endif
                                        <hr/>
                                    </div>

                                    <div class="selector-wrapper js">
                                        <label for="SingleOptionSelector-product-1">
                                            Size
                                        </label>
                                        <select class="single-option-selector single-option-selector-product" id="SingleOptionSelector-product-1" data-section="product" data-index="option2">
                                            <option value="Small" selected="selected">Small</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Large">Large</option>
                                            <option value="X-Large">X-Large</option>
                                            <option value="2X-Large">2X-Large</option>
                                        </select>
                                    </div>
                                    <div class="add-to-cart__wrapper">
                                        <button class="btn btn--large btn--full btn--clear uppercase addToCartBtn">
                                            <span>Add to Cart</span>
                                            <span class="unicode">•</span>
                                            <span class="money">${{ $products->selling_price }}</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
