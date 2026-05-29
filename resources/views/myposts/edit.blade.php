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
                    <form action="/scheduler/edit/{{ $auth->id }}" method="POST">
                        <p>店舗名：{{ $store->store_name }}</p>
                        <p>評価：<input type="name" name="name" value="{{ old('name', $auth->review) }}"></p>
                        <p>コメント：<input type="text" name="comment" value="{{ old('comment', $auth->comment) }}"></p>
                        {{-- <a href="{{ route('myposts.edit') }}">変更</a> --}}
                        {{-- <a href="{{ route('myposts.delete') }}">削除</a> --}}
                        <button type="submit" class="btn-blue" name="send">変更</button>
                    </form>
                </div>
            </div>
            
    </div>
</x-app-layout>
