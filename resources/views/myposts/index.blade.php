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
                    @foreach ($auth->stores as $store)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        
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
                            <div class="p-6 text-gray-900">
                            <a href="/myposts/edit/{{ $store->pivot->id }}">編集</a>
                            <form action="/myposts/destroy/{{ $store->pivot->id }}" method="post">
                                @csrf
                                @method('Delete')
                                <input type="submit" name="delete" value="削除">
                            </form>
                            
                        </div> 
                        
                        

                    </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    @else
        <p>投稿はありません</p>
    @endif
</x-app-layout>
