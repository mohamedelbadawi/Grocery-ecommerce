<div>


    <a class="btn btn-primary float-right " data-toggle="modal" href="#address-Modal" data-target="#address-Modal">Add new
        Address</a>


    @foreach ($usersAddresses as $address)
        <div class="mt-3">
            <input type="radio" wire:modell="address" value="{{ $address->id }}"
                @if ($address->default) checked @endif>
            <label for="address">{{ $address->city }} ,{{ $address->building }}</label><br>
        </div>
    @endforeach
    <button class="btn btn-primary mt-3" wire:click="makeDefault('{{ $address->id }}')">make default</button>

</div>
