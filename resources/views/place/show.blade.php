<x-app-layout>

        <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">                


@section('content')
<h1>詳細確認</h1>
<table class="table table-striped">
{{-- {{dd($place->stores)}} --}}


        <div>店名：{{$store->store_name}}</div>
        <div>地域名：{{ $store->places->place_name}}</div>
        <div>ジャンル：{{ $store->category->category_name}}</div>
        <div>画像：<img src="{{asset('storage/images/'.$store->store_image) }}"width='300' height='200'/></div>

        @if ($errors->any())
        {{-- エラー内容が出力されるが、処理が中断される  --}}
        {{-- @php dd($errors); @endphp --}}
        <ul>
        @foreach ($errors->all() as $error)
                <li><span class="error">{{ $error }}</span></li>
        @endforeach
        </ul>
@endif

        <form action="/place" method="POST">
                <input type="hidden" name="store_id" value="{{$store->id}}">
                @csrf
        <div>評価：
                <label><input type="radio" name="review" value="1.0">1</label>
                <label><input type="radio" name="review" value="2.0">2</label>
                <label><input type="radio" name="review" value="3.0">3</label>
                <label><input type="radio" name="review" value="4.0">4</label>
                <label><input type="radio" name="review" value="5.0">5</label>
        </div>
        <div>コメント：<br>
                <textarea name="comment" id="comment" value="{{old('commnet')}}"></textarea><br>
        </div>
        <button type="submit" name="send">投稿</button>
</form>
</table>

        </div>
        </div>
        </div>
        </div>



</x-app-layout>