<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$current_page}} | The Books Project</title>
    <style>
        a {
            color: blue;
        }
        .highlighted {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>

    @include('layouts/navigation', [
        'current_page' => $current_page
        ])

    @yield('content')

</body>

</html>