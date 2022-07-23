<div>
    <div class="form-group">
        <label for="searh"> search</label>
        <input type="text" class="form-control" style="width: 30%" wire:model="search">
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10 mb-5 text-center">
            <ul class="product-category">

                @foreach ($categories as $category)
                    <li><a wire:click="filterCategories({{ $category->id }})"
                            class="{{ in_array($category->id, $selectedCategories) ? ' active' : '' }}">{{ $category->name }}</a>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>


    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-6 col-lg-3 ">
                <div class="product">
                    <a href="{{ route('shop.product', $product->id) }}" class="img-prod"><img class="img-fluid"
                            src="{{ asset($product->mainImage->image) }}" alt="Colorlib Template">

                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{ $product->name }}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-sale">${{ $product->price }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">

                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $products->links() }}
    </div>

    {{-- @include('pagination') --}}
</div>
