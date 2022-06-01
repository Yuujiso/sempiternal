@extends('layouts.front')

@section('title')
    My Cart
@endsection

@section('content')

    <div class="cart">
        <div class="wrapper page-margin">
            <form class="cart cartForm">
                <h3>Your Cart</h3>
                <div data-cart-form-wrapper="">
                    <div class="cart__body">
                        <div class="cart__row medium-down--hide cart__header-labels">
                            <div class="grid--full">
                                <div class="grid__item large--one-half push--large--one-half">
                                    <div class="grid--full cart__line__nums">
                                        <div class="grid__item one-third medium-down--one-third">
                                            Price
                                        </div>
                                        <div class="grid__item one-third medium-down--one-third text-center cart__qty__th">
                                            Quantity
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $total = 0; @endphp
                        @foreach($cartitems as $item)
                            <div class="cart__row product_data">
                                <div class="item--loadbar" style="display: none;"></div>
                                <div class="grid--full cart__row--table-large">
                                    <div class="grid__item large--one-half">
                                        <div class="grid--full cart__row--table-large">
                                            <div class="grid__item one-third small--one-quarter">
                                                <a href=" {{ url('viewproduct/'.$item->product->slug) }}" class="cart__image">
                                                    <img src="{{ asset('assets/uploads/product/'.$item->product->image) }}" alt="">
                                                </a>
                                            </div>

                                            <div class="grid__item two-thirds small--three-quarters cart__item__title">
                                                <a href="" class="h4--body">
                                                    {{ $item->product->name }}
                                                </a>

                                                <p class="item__vendor">{{ $item->product->intro_description }}</p>
                                                <a class="cart__remove uppercase lighten deleteFromCart">
                                                    <small>Remove</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid__item large--one-half">
                                        <div class="grid--full cart__row--table-large cart__line__nums">
                                            <div class="grid__item one-third text-left">
                                                <span class="cart__mini-labels">Price</span>
                                                <div class="item__price">
                                                    <p>${{ $item->product->selling_price }}</p>
                                                </div>
                                            </div>
                                            <div class="grid__item one-third text-center cart__line__qty">
                                                <div class="cart__qty">
                                                    <input type="hidden" class="product_id" value=" {{ $item->product_id }}">
                                                    <div class="input-group">
                                                        <button class="js-qty__adjust js-qty__adjust--minus changeQuantity decrement-btn">−</button>
                                                        <input class="text quantity js-qty__num quantity-input text-center form-control" name="quantity" type="number" min="1" size="4" aria-label="quantity" pattern="[0-9]*" value="{{ $item->product_quantity }}">
                                                        <button class="js-qty__adjust js-qty__adjust--plus changeQuantity increment-btn">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $total += $item->product->selling_price * $item->product_quantity; @endphp
                        @endforeach
                    </div>
                    <div class="cart__row cart__footer">
                        <div class="grid">
                            <div class="grid__item text-right">
                                <p class="cart__footer__text">
                                    <span class="cart__subtotal-title uppercase">Subtotal</span>
                                    <span class="cart__subtotal">${{ $total }}</span>
                                </p>
                                <div class="cart__footer__buttons">
                                    <span><input name="checkout" class="btn uppercase btn--large btn--splash checkout__button" value="Check Out"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

