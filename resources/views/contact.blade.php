<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset('css/style.css')}} ">

    <title>Contact Us</title>
</head>

<body>

    <h1> {{ $title }} </h1>

    <ul>

        @foreach ($emails as $email)
            <li> {{ $email }} </li>
        @endforeach

    </ul>

    <a href="/">Home</a>


</body>

</html>
