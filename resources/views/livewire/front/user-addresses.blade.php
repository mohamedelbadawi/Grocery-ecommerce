<div>


    <button class="btn btn-primary float-right " id="btn" wire:click="formShow">Add new
        Address</button>
    @if (!$userAddresses->isEmpty())
        @foreach ($userAddresses as $address)
            <div class="mt-3">
                <input type="radio" wire:model="address" value="{{ $address->id }}"
                    @if (!auth()->user()->defaultAddress->isEmpty()) @if (auth()->user()->defaultAddress->first()->id == $address->id) checked @endif @endif

                >
                <label for="address">{{ $address->city }} ,{{ $address->street }}, {{ $address->building }}</label><br>
            </div>
        @endforeach
        <button class="btn btn-primary mt-3" wire:click="makeDefault">make default</button>
    @endif


    @if ($formShow)
        <div class="form card p-4 mt-3 " id="form">
            <div class="form-group">
                <label for="">City</label>
                <input type="text" wire:model="city" class="form-control">
                @error('city')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">street</label>
                <input type="text" wire:model="street" class="form-control">
                @error('street')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">building</label>
                <input type="text" wire:model="building" class="form-control">
                @error('building')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">postal code</label>
                <input type="text" wire:model="code" class="form-control">
                @error('code')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary mt-3" wire:click="addAddress">Add</button>
        </div>
    @endif


</div>
