<div class="row justify-content-end">

    <div class="col-lg-4 mt-5 cart-wrap ">
        <div class="cart-total mb-3">
            <h3>{{ trans('cart.Cart Total') }}</h3>
            <p class="d-flex">
                <span>{{ trans('cart.Subtotal') }}</span>
                <span>$ {{ \Cart::Subtotal() }}</span>
            </p>
            <p class="d-flex">
                <span>{{ trans('cart.Delivery (fixed)') }}</span>
                <span> 20$</span>
            </p>

            <hr>
            <p class="d-flex total-price">
                <span>{{ trans('cart.Total') }}</span>
                <span>{{ Cart::total() + 20 }} $</span>
            </p>
        </div>
        <p><a href="@if (!Cart::count()) javascript:void(0)@else {{ route('checkout') }} @endif"
                class="btn btn-primary py-3
                px-4">{{ trans('cart.Proceed to Checkout') }}</a></p>
    </div>
</div>
