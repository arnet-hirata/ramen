<x-app-layout>
@foreach($all_places as $place)
        <div>地名：{{$place->place_name}}</div>
        <div>店名：
            @foreach($place->stores as $store) 
                {{"{$store->store_name} / "}}
                <br>
                <div><a href="/place/{{ $place->id}}" class="btn btn-primary">詳細</a></div>
            @endforeach
        <br>
        @endforeach
</x-app-layout>