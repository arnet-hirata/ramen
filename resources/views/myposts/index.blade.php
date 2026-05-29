<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿一覧') }}
        </h2>
    </x-slot>
    @if ($auths->count() > 0)
    {{-- {{dd($auths->stores,$auths->pivot->comment)}} --}}
    
    <div class="py-12">
            @foreach($auths as $auth)
                
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        @foreach ($auth->stores as $store)
                            <div class="p-6 text-gray-900">
                                店名:
                                    {{ $store->store_name }}<br>
                            </div>
                            <div class="p-6 text-gray-900">
                                投稿日時:{{ $store->pivot->created_at }}<br>
                            </div>
                            <div class="p-6 text-gray-900">
                                評価:
                                {{ $store->pivot->review }}<br>
                            </div>
                            <div class="p-6 text-gray-900">
                                コメント:<br>
                                {{ $store->pivot->comment }}
                            </div> 
                        @endforeach
                            {{-- <a href="{{ route('myposts.edit') }}">変更</a> --}}
                            {{-- <a href="{{ route('myposts.delete') }}">削除</a> --}}
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>投稿はありません</p>
    @endif
</x-app-layout>
