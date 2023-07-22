@if ($errors->any())
    <div class="alert alert-danger">
        <strong>エラーが発生しました：</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif