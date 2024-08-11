<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raven</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <div class="container">
        <div class="menu">
            <h1>Raven</h1>
            <div class="top-line">
                <a href="/" class="logo">
                    <img src="{{ asset('raven.png') }}" alt="raven"  width="256" height="256">
                </a>
            </div>
        </div>
        <div class="posts">
            @foreach($posts as $post)
                <div class="post">
                    <h1>{{ $post->title }}</h1><br/>
                    <p>{{ $post->text }}</p><br/>
                </div>
            @endforeach
        </div>
        <div class="text-input-form">
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <p>
                    <label for="title">Введите заголовок:</label><br/>
                    <input type="text" name="title" id="title" placeholder="Мой заголовок" required>
                </p>
                <p>
                    <label for="content">Введите текст:</label><br/>
                    <textarea id="content" name="text" rows="5" cols="33">Мой текст</textarea>
                </p>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
</body>
</html>
