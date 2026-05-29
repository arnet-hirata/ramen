<x-app-layout>


@section('content')
<h1>詳細確認</h1>
<table class="table table-striped">
{{-- {{dd($place->stores)}} --}}


        <div>店名：{{$store->store_name}}</div>
        <div>地域名：{{ $store->places->place_name}}</div>
        <div>ジャンル：{{ $store->category->category_name}}</div>
        <div>画像：</div>
        <div>評価：</div>
        <div>コメント：</div>
</table>


</x-app-layout>