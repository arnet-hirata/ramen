<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿一覧') }}
        </h2>
    </x-slot>
    {{-- {{dd($auths->stores,$auths->pivot->comment)}} --}}
    
    <div class="py-12">
        
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form action="/myposts/update/{{ $mypost->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="p-6 text-gray-900">
                            <p>店舗名：{{ $store->store_name }}</p>    
                        </div> 
                        <div class="p-6 text-gray-900">
                            <p>評価：<input type="number" name="review" value="{{ old('review', $mypost->review) }}"></p>   
                        </div> 
                        <div class="p-6 text-gray-900">
                            <p>コメント：<input type="text" name="comment" value="{{ old('comment', $mypost->comment) }}"></p>   
                        </div> 
                        <div class="p-6 text-gray-900">
                            <button type="submit" class="btn-blue" name="send">変更</button>   
                        </div> 
                        
                    </form>
                </div>
            </div>
            
    </div>
</x-app-layout>
