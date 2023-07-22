<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - My App</title>
</head>
<body>
    <header>
        @include('commons.navbar') <!-- navbar.blade.php を組み込む -->
    </header>
    <main>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- エラーメッセージを表示 -->
        @include('commons.error_message')
        <!-- 子ビューのコンテンツを表示 -->
        @yield('content')
    </main>

    <footer>
        <!-- フッターのコンテンツ -->
        <p>© 2023 My App. All rights reserved.</p>
    </footer>
</body>
</html>