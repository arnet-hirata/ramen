<x-app-layout>


@section('content')
<h1>詳細確認</h1>
<table class="table table-striped">
{{-- {{dd($place->stores)}} --}}


        <div>店名：{{$store->store_name}}</div>
        <div>地域名：{{ $store->places->place_name}}</div>
        <div>ジャンル：{{ $store->category->category_name}}</div>
        <div>画像：</div>


        @if ($errors->any())
        {{-- エラー内容が出力されるが、処理が中断される  --}}
        {{-- @php dd($errors); @endphp --}}
        <ul>
        @foreach ($errors->all() as $error)
                <li><span class="error">{{ $error }}</span></li>
        @endforeach
        </ul>
@endif

        <form action="/place/{{ $store->id}}" method="POST">
                @csrf
        <div>評価：
                <label><input type="radio" name="review" value="1.0">1</label>
                <label><input type="radio" name="review" value="2.0">2</label>
                <label><input type="radio" name="review" value="3.0">3</label>
                <label><input type="radio" name="review" value="4.0">4</label>
                <label><input type="radio" name="review" value="5.0">5</label>
        </div>
        <div>コメント：
                <textarea name="comment" id="comment" value="{{old('commnet')}}"></textarea><br>
        </div>
        <button type="submit" name="send">投稿</button>
</form>
</table>


</x-app-layout>