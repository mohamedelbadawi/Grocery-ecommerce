<div class="col-md-12">
    <div class="cart-detail p-3 p-md-4">
        <h3 class="billing-heading mb-4">Payment Method</h3>

        <div class="form-group">
            <div class="col-md-12">
                <div class="radio">
                    <label><input type="radio" wire:model="paymentMethod" value="cash" class="mr-2"> Cash</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="radio">
                    <label><input type="radio" wire:model="paymentMethod" value="card" class="mr-2"> Credit
                        Card</label>
                </div>
            </div>
        </div>
        @if ($paymentMethod == 'card')
            <form action="" class="form ">
                <div class="form-group">
                    <label for="cardNumber"> card number</label>
                    <input type="text" class="form-control" wire:model="cardNumber" id="">
                </div>

                <div class="d-flex">

                    <div class="form-group mr-2">
                        <label for="month">Expiry Month </label>
                        <input type="text" class="form-control" wire:model="month" id="">
                    </div>
                    <div class="form-group">
                        <label for="year">Expiry year </label>
                        <input type="text" class="form-control" wire:model="year" id="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="cvc">CVC </label>
                    <input type="text" class="form-control" wire:model="cvc" id="">
                </div>
            </form>
        @endif
        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox">
                    <label><input type="checkbox" value="" class="mr-2"> I have read and
                        accept the terms and conditions</label>
                </div>
            </div>
        </div>
        <p><button wire:click="placeOrder" class="btn btn-primary py-3 px-4">Place an order</button></p>
    </div>
</div>
