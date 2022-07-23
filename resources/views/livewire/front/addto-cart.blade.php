<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ">
                <a href="images/product-1.jpg" class="image-popup"><img
                        src="{{ asset($product->images->first()->image) }}" class="img-fluid"
                        alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ">
                <h3>{{ $product->name }}</h3>
                <div class="rating d-flex">

                    <p class="text-left mr-4">
                        <a href="#" class="mr-2">{{ $product->totalRate() }}</a>

                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>

                    <p class="text-left mr-4">
                        <a href="#" class="mr-2" style="color: #000;">{{ $product->rates->count() }}<span
                                style="color: #bbb;">{{ trans('front.Rating') }}</span></a>
                    </p>

                </div>
                <p class="price"><span>${{ $product->price }}</span></p>
                <p>{{ $product->description }}
                </p>
                <div class="row mt-4">
                    <div class="w-100"></div>
                    <div class="input-group col-md-6 d-flex mb-3">
                        <span class="input-group-btn mr-2">
                            <button type="button" class="quantity-left-minus btn" data-type="minus" wire:click="decrement" data-field="">
                                <i class="ion-ios-remove"></i>
                            </button>
                        </span>
                        <input type="numeric" wire:model="quantity" id="quantity" name="quantity"
                            class="form-control input-number"  min="1" max="100">
                        <span class="input-group-btn ml-2">
                            <button type="button" wire:click="increment" class="quantity-right-plus btn" data-type="plus" data-field="">
                                <i class="ion-ios-add"></i>
                            </button>
                        </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p style="color: #000;">{{ $product->stock }} kg {{ trans('front.available') }}</p>
                    </div>
                </div>
                <p><a wire:click="addToCart" class="btn btn-black py-3 px-5">Add to Cart</a></p>
            </div>
        </div>
    </div>
</section>
