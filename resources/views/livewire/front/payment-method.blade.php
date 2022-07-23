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
        @error('paymentMethod')
            <span class="error">{{ $message }}</span>
        @enderror
        @if ($paymentMethod == 'card')
            <form action="" class="form ">
                <div class="form-group">
                    <label for="cardNumber"> card number</label>
                    <input type="text" class="form-control" wire:model="cardNumber" id="">
                    @error('cardNumber')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>

                <div class="d-flex">

                    <div class="form-group mr-2">
                        <label for="month">Expiry Month </label>
                        <input type="text" class="form-control" wire:model="month" id="">
                        @error('month')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="year">Expiry year </label>
                        <input type="text" class="form-control" wire:model="year" id="">
                        @error('year')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">

                    <label for="cvc">CVC </label>
                    <input type="text" class="form-control" wire:model="cvc" id="">
                    @error('cvc')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </form>
        @endif

        <p><button wire:click="placeOrder" class="btn btn-primary py-3 px-4">Place an order</button></p>
    </div>
</div>
