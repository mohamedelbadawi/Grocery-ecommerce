@extends('layouts.app')
@section('content')
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="cart-list">
                        <table class="table">


                            <thead class="thead-primary">
                                @if (Cart::count())
                                    <tr class="text-center">
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th>Product name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                @endif
                            </thead>

                            @livewire('front.cart-products')


                        </table>
                    </div>
                </div>
            </div>
            @if (Cart::count())
            @livewire('front.cart-total')
            @endif
        </div>
    </section>
@endsection
