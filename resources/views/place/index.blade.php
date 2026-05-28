<x-app-layout>
@foreach($all_places as $place)
        <div>地名：{{$place->place_name}}</div>
        <div>店名：
            @foreach($place->stores as $store) 
                {{"{$store->store_name} / "}}
            <br>
            @endforeach
        {{-- print('</div><br>'); --}}
        <br>
        @endforeach
</x-app-layout>