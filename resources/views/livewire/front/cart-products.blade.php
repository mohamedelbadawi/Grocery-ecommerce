<tbody>
    @forelse ($products as $product)
        <tr class="text-center">
            <td class="product-remove"><a wire:click="removeProduct('{{ $product->rowId }}')"><span
                        class="ion-ios-close"></span></a>
            </td>

            <td class="image-prod">
                <div class="img" style="background-image:url({{ asset($product->options->image) }});">
                </div>
            </td>

            <td class="product-name">
                <a href="{{ route('shop.product', $product->id) }}">
                    <h3> {{ $product->name }} </h3>
                </a>
                <p>{{ $product->options->description }}</p>
            </td>

            <td class="price">{{ $product->price }} $</td>

            <td class="quantity">
                <div class="input-group mb-3">
                    <input type="text" name="quantity" class="quantity form-control input-number"
                        value="{{ $product->qty }}" min="1" max="100" disabled>
                </div>
            </td>


            <td class="total">{{ $product->total() }}</td>
        </tr>
    @empty
        <tr class="text-center">
            <td class="product-name">
                <h2>Cart is empty</h2>
            </td>
        </tr>
    @endforelse
</tbody>
