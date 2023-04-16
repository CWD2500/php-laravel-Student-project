<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.rtl.css') }}">
    <title>Document</title>
</head>
<body >

    <header>
    <img src="" alt=""  class="img">
    <nav class="nav">
        <ul>
            <li class="mt-3">
                <a href="index.html">Home</a>
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="contact.html">Contact</a>
            </li>
        </ul>   
    </nav>
    </header>
    


@yield('content')

    <script src="{{ url('js/bootstrap.js') }}"></script>
</body>
</html>