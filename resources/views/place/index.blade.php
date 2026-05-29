<x-app-layout>
@foreach($all_places as $place)

    <div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">                
    <div class="text-xl">    

        <div>地名：{{$place->place_name}}</div>

        </div>
        </div>
        </div>
        </div>

    <div class="py-1">
    <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">                

        <div>店名：
            @foreach($place->stores as $store) 
                {{"{$store->store_name}  "}}
                <br>
                <div><label><a href="/place/{{ $store->id}}" class="btn btn-primary">詳細</a></label></div>
            @endforeach
        <br>

        </div>
        </div>
        </div>
        </div>
        @endforeach
</x-app-layout>