<x-app-layout>
<h1>店舗登録画面</h1>

    <form action="/store/create" method="POST">
        @csrf
        店舗名、住所、画像、カテゴリID

        <div>
            <button type="submit" name="send" class="btn-blue" >送信<i class="fa-solid fa-caret-right"></i>
</button>
        </div>
    </form>

</x-app-layout>
