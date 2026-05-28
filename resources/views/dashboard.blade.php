<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('大分ラーメン食べログ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">                
                    {{ __("店名一覧") }}
    </div>
    </div>
    </div>
    </div>
                {{-- 店名一覧の処理を開始 --}}
                @foreach($foods as $food)

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">                


                <tr>
                    <div>
                    {{-- 店舗画像 --}}
                    <td><a href="/詳細画面URL{{ __($food->id) }}">{{ __($food->image) }}</a></td> 
                    </div>
                <div>            
                    {{-- 店名 --}}
                    <td><a href="/詳細画面URL{{ __($food->id) }}">{{ __($food->food_name) }}</a></td>
                </div>
                <div>            
                    {{-- 場所 --}}
                    <td><a href="/詳細画面URL{{ __($food->id) }}">{{ __($food->food_name) }}</a></td>
                </div>
                <div>            
                    {{-- カテゴリー --}}
                    <td><a href="/詳細画面URL{{ __($food->id) }}">{{ __($food->food_name) }}</a></td>
                </div>

                {{-- <div class="p-6 text-gray-900">              --}}
                    {{-- {{ __("ラーメン") }} --}}
            {{-- </div> --}}
                    </div>
    </div>
    </div>
    </div>

                </tr>
            @endforeach
</x-app-layout>
