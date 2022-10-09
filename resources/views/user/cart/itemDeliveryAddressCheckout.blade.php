@foreach ($addresses as $address) 
    <div address-id={{ $address->id }} class="delivery-add-item w-auto mr-2 ml-2 flex-column align-items-start address-button cursor-pointer" data-dismiss="modal">
        <h4 class="heading-7">{{ $address->name }}</h4>
        <div class="text-size-small">{{ $address->phone }}</div>
        <div class="text-size-small">
            {{ $address->block_number }} {{ $address->street }} <br>
            #{{ $address->unit_level }}-{{ $address->unit_number }} {{ $address->building_name }}<br>
            Singapore {{ $address->postal_code }}
        </div>
    </div>
@endforeach