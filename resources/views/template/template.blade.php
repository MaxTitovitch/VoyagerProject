<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ 'storage/' . setting('site.logo') }}">
    <title>
        @section('title')
        @show
        – {{ setting('site.title') }}
    </title>
</head>
<body>
    <header>
        @section("header")
            Хедер
        @show
    </header>
    <main>
        @section("content")
        @show
    </main>
    <footer>
        @section("footer")
            Футер
        @show
    </footer>
</body>
</html>
