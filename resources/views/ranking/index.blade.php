<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('大分人気ラーメン') }}
        </h2>
    </x-slot>
    <h2></h2>
    @if ($stores->count() > 0)
        <div class="py-12">
            @foreach($stores as $store)
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        
                            <div class="p-6 text-gray-900">
                                お店:{{ $store->store_name }}<br>
                            </div>
                            {{-- <div class="p-6 text-gray-900">
                                {{-- 写真 --}}
                                {{-- {{ $store->store_name }}<br> --}}
                            {{-- </div> --}}
                            {{-- <div class="p-6 text-gray-900"> --}}
                                {{-- 評価: --}}
                                {{-- @foreach --}}
{{--  --}}
                                {{-- @endforeach --}}
                                {{-- <br> --}}
                            {{-- </div> --}}
                            {{-- <div class="p-6 text-gray-900"> --}}
                                {{-- 場所:{{ $store->store_place }}<br> --}}
                            {{-- </div> --}} 
                        
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>該当のお店はありません</p>
    @endif
</x-app-layout>



