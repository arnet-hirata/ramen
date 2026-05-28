<x-app-layout>


@section('content')
<h1>詳細確認</h1>
<table class="table table-striped">

        <div>店名：</div>
        <div>地域名：{{ $place->place_name}}</div>
        <div>ジャンル：</div>
        <div>画像：</div>
        <div>評価：</div>
        <div>コメント：</div>
</table>

</x-app-layout>